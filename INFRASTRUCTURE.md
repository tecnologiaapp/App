# Documentación de Infraestructura - Website App

## Descripción General
Este documento describe la infraestructura y configuración del sitio web de la entidad APP, desplegado en AWS usando una arquitectura serverless.

## Estructura del Proyecto
```
App/
├── infra/                    # Configuración de infraestructura
│   ├── app.py               # Punto de entrada de CDK
│   ├── requirements.txt     # Dependencias de Python
│   └── stacks/             # Definiciones de stacks
│       └── infra_stack.py  # Stack principal
├── docker/                  # Configuración de Docker
│   └── nginx/             
│       └── default.conf    # Configuración de Nginx
└── .github/                # CI/CD
    └── workflows/
        └── deploy.yml     # Workflow de GitHub Actions
```

## Componentes de la Infraestructura

### 1. VPC (Virtual Private Cloud)
- Una sola zona de disponibilidad para optimizar costos
- Subredes:
  - Pública: Para el Load Balancer
  - Privada Aislada: Para la base de datos
- Sin NAT Gateway (no necesario para una sola AZ)

### 2. ECS (Elastic Container Service)
- Cluster Fargate (serverless)
- Task Definition:
  - 512MB de memoria
  - 256 CPU units
- Variables de entorno:
  - `APP_ENV=production`
  - `APP_DEBUG=false`
  - `APP_URL=https://www.app.gov.co`

### 3. Load Balancer
- Application Load Balancer público
- Listeners:
  - HTTP (80): Redirecciona a HTTPS
  - HTTPS (443): Termina SSL
- Health check en la ruta "/"

### 4. Base de Datos
- Aurora Serverless v2 (MySQL)
- Escalado automático: 0.5-1.0 ACU
- Backup diario (retención 7 días)
- Ventana de mantenimiento: 03:00-04:00

### 5. Almacenamiento
- S3 Bucket: `website-app-files`
- Política de eliminación automática

## Proceso de Despliegue

### 1. Requisitos Previos
```bash
# Instalar dependencias
cd infra
pip install -r requirements.txt

# Configurar AWS
aws configure
```

### 2. Despliegue de la Infraestructura
```bash
# El despliegue construirá y subirá la imagen automáticamente
cdk deploy
```

CDK Assets se encargará automáticamente de:
1. Construir la imagen Docker usando el Dockerfile local
2. Crear un repositorio ECR temporal
3. Subir la imagen al repositorio
4. Usar la imagen en la definición de tarea de ECS

La URI de la imagen se mostrará en los outputs del stack como `ImageURI`.

## Configuración del Dominio

### 1. Certificado SSL
- Se crea automáticamente con AWS Certificate Manager
- Validación mediante DNS
- Los registros CNAME de validación se muestran en los outputs del stack

### 2. Configuración DNS
1. Obtener el DNS del Load Balancer:
```bash
aws cloudformation describe-stacks --stack-name WebsiteAppStack --query 'Stacks[0].Outputs[?OutputKey==`LoadBalancerDNS`].OutputValue' --output text
```

2. Configurar en el proveedor de DNS:
   - CNAME: `www.app.gov.co` -> `<load-balancer-dns>`
   - Agregar registros CNAME de validación del certificado

## Migración de Base de Datos

### 1. Preparación
```bash
# En el servidor on-premise
mysqldump -u root -p --single-transaction --routines --triggers --events website_app > website_app_backup.sql
```

### 2. Migración
```bash
# 1. Detener la aplicación
php artisan down

# 2. Dump final
mysqldump -u root -p --single-transaction --routines --triggers --events website_app > website_app_final.sql

# 3. Importar en Aurora
mysql -h <aurora-endpoint> -u admin -p website_app < website_app_final.sql

# 4. Actualizar .env
DB_CONNECTION=mysql
DB_HOST=<aurora-endpoint>
DB_PORT=3306
DB_DATABASE=website_app
DB_USERNAME=admin
DB_PASSWORD=<password-from-secrets-manager>

# 5. Ejecutar migraciones
php artisan migrate
php artisan db:seed

# 6. Limpiar caché
php artisan config:clear
php artisan cache:clear
```

## Monitoreo y Mantenimiento

### 1. Logs
- CloudWatch Logs con prefijo "website-app"
- Retención de 1 mes

### 2. Métricas
- CloudWatch Metrics para:
  - ECS
  - Load Balancer
  - Aurora
  - S3

### 3. Alertas
- Configurar alertas en CloudWatch para:
  - CPU alta
  - Memoria baja
  - Errores 5xx
  - Latencia alta

## Costos Estimados (Mensuales)
- ECS Fargate: ~$20-30
- Aurora Serverless: ~$15-25
- Load Balancer: ~$20
- S3: ~$5-10
- Total: ~$60-85/mes

## Consideraciones de Seguridad
1. La base de datos está en subredes privadas
2. El Load Balancer maneja la terminación SSL
3. Las credenciales de la base de datos se generan automáticamente
4. El bucket S3 tiene política de eliminación automática
5. Solo se permiten los puertos 80 y 443 en el Load Balancer

## Rollback
En caso de problemas:
1. Revertir los cambios en DNS
2. Eliminar el stack:
```bash
cdk destroy
```
3. Restaurar la base de datos desde el backup
4. Volver a la versión anterior de la aplicación 