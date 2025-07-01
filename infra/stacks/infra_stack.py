from aws_cdk import (
    Stack,
    aws_ec2 as ec2,
    aws_ecs as ecs,
    aws_elasticloadbalancingv2 as elbv2,
    aws_iam as iam,
    aws_logs as logs,
    aws_certificatemanager as acm,
    CfnOutput,
    Duration,
)
from constructs import Construct
from aws_cdk.aws_ecr_assets import Platform

class WebsiteAppStack(Stack):
    def __init__(self, scope: Construct, construct_id: str, **kwargs) -> None:
        super().__init__(scope, construct_id, **kwargs)

        # VPC sin subredes aisladas (ya no se requiere para Aurora)
        vpc = ec2.Vpc(
            self, 
            "WebsiteAppVPC",
            max_azs=2,
            nat_gateways=1,
            subnet_configuration=[
                ec2.SubnetConfiguration(
                    name="Public",
                    subnet_type=ec2.SubnetType.PUBLIC,
                    cidr_mask=24
                ),
                ec2.SubnetConfiguration(
                    name="Private",
                    subnet_type=ec2.SubnetType.PRIVATE_WITH_EGRESS,
                    cidr_mask=24
                )
            ]
        )

        # ECS Cluster
        cluster = ecs.Cluster(self, "WebsiteAppCluster", vpc=vpc)

        # Task Definition optimizada para bajo tráfico
        task_definition = ecs.FargateTaskDefinition(
            self, "WebsiteAppTask",
            memory_limit_mib=512,
            cpu=256,
            ephemeral_storage_gib=50
        )

        # Container usando la imagen construida con CDK Assets
        container = task_definition.add_container(
            "WebsiteAppContainer",
            image=ecs.ContainerImage.from_asset(
                directory="..",  # Apuntar al directorio padre (App)
                file="Dockerfile",
                platform=Platform.LINUX_AMD64,
                exclude=[
                    ".git",
                    ".gitignore",
                    ".gitattributes",
                    "infra",
                    "cdk.out",
                    "tests",
                    "*.md",
                    "phpunit.xml",
                    ".env*",
                    ".editorconfig",
                    ".idea",
                    ".vscode",
                    "node_modules",
                    "vendor"
                ]
            ),
            logging=ecs.LogDrivers.aws_logs(
                stream_prefix="website-app",
                log_retention=logs.RetentionDays.ONE_MONTH
            ),
            environment={
                "APP_NAME": "Laravel",
                "APP_ENV": "local",
                "APP_KEY": "base64:Zi0aU8hJOWzuxgFYprfA7xvHnEgmNEYBZ6LDGZ7hTDs=",
                "APP_DEBUG": "true",
                "APP_URL": "https://www.app.gov.co",
                "ASSET_URL": "https://www.app.gov.co",
                "LOG_CHANNEL": "stack",
                "LOG_DEPRECATIONS_CHANNEL": "null",
                "LOG_LEVEL": "debug",
                "BROADCAST_DRIVER": "log",
                "CACHE_DRIVER": "file",
                "FILESYSTEM_DISK": "local",
                "QUEUE_CONNECTION": "sync",
                "SESSION_DRIVER": "file",
                "SESSION_LIFETIME": "120",
                "MEMCACHED_HOST": "127.0.0.1",
                "REDIS_HOST": "127.0.0.1",
                "REDIS_PORT": "6379",
                "MAIL_MAILER": "smtp",
                "MAIL_HOST": "smtp.gmail.com",
                "MAIL_PORT": "587",
                "MAIL_USERNAME": "alexis.espinosa@app.gov.co",
                "MAIL_ENCRYPTION": "tls",
                "MAIL_FROM_ADDRESS": "alexis.espinosa@app.gov.co",
                "MAIL_FROM_NAME": "Laravel",
                "AWS_ACCESS_KEY_ID": "",
                "AWS_SECRET_ACCESS_KEY": "",
                "AWS_DEFAULT_REGION": "us-east-1",
                "AWS_BUCKET": "",
                "AWS_USE_PATH_STYLE_ENDPOINT": "false",
                "PUSHER_APP_ID": "",
                "PUSHER_APP_KEY": "",
                "PUSHER_APP_SECRET": "",
                "PUSHER_HOST": "",
                "PUSHER_PORT": "443",
                "PUSHER_SCHEME": "https",
                "PUSHER_APP_CLUSTER": "mt1",
                "VITE_PUSHER_APP_KEY": "",
                "VITE_PUSHER_HOST": "",
                "VITE_PUSHER_PORT": "443",
                "VITE_PUSHER_SCHEME": "https",
                "VITE_PUSHER_APP_CLUSTER": "mt1"
            },
        )

        container.add_port_mappings(ecs.PortMapping(container_port=80))

        # Security Group
        security_group = ec2.SecurityGroup(
            self, "WebsiteAppSecurityGroup",
            vpc=vpc,
            description="Security group for Website App ECS service",
            allow_all_outbound=True
        )

        security_group.add_ingress_rule(
            ec2.Peer.any_ipv4(), ec2.Port.tcp(80), "Allow HTTP traffic"
        )
        security_group.add_ingress_rule(
            ec2.Peer.any_ipv4(), ec2.Port.tcp(443), "Allow HTTPS traffic"
        )

        # Load Balancer con configuración optimizada
        lb = elbv2.ApplicationLoadBalancer(
            self, "WebsiteAppLB",
            vpc=vpc,
            internet_facing=True,
            idle_timeout=Duration.seconds(60)
        )

        # Importar certificado existente o crear uno nuevo
        certificate = acm.Certificate.from_certificate_arn(
            self, "Certificate",
            certificate_arn="arn:aws:acm:us-east-1:825612589793:certificate/08cc41bd-40ee-4dfd-98e3-29555b47fc79"  # Reemplazar con tu ARN de certificado
        )

        # HTTPS Listener
        https_listener = lb.add_listener(
            "HttpsListener",
            port=443,
            certificates=[certificate],
            default_action=elbv2.ListenerAction.fixed_response(
                status_code=200,
                content_type="text/plain",
                message_body="Healthy"
            )
        )

        # Target Group para HTTPS
        target_group = https_listener.add_targets(
            "WebsiteAppHttpsTarget",
            port=80,
            targets=[
                ecs.FargateService(
                    self, "WebsiteAppService",
                    cluster=cluster,
                    task_definition=task_definition,
                    security_groups=[security_group],
                    vpc_subnets=ec2.SubnetSelection(
                        subnet_type=ec2.SubnetType.PRIVATE_WITH_EGRESS
                    ),
                    assign_public_ip=False,
                    desired_count=1,
                    min_healthy_percent=100,
                    max_healthy_percent=200,
                    health_check_grace_period=Duration.seconds(120),
                )
            ],
            health_check=elbv2.HealthCheck(
                path="/health",
                healthy_http_codes="200-499",
                interval=Duration.seconds(60),
                timeout=Duration.seconds(30),
                healthy_threshold_count=2,
                unhealthy_threshold_count=10
            ),
            deregistration_delay=Duration.seconds(60)
        )

        # HTTP Listener (redireccionar a HTTPS)
        http_listener = lb.add_listener(
            "HttpListener",
            port=80,
            default_action=elbv2.ListenerAction.redirect(
                protocol="HTTPS",
                port="443",
                permanent=True
            )
        )

        # Outputs
        CfnOutput(self, "LoadBalancerDNS", value=lb.load_balancer_dns_name)