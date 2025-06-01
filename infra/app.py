#!/usr/bin/env python3
import os
from aws_cdk import App
from stacks.infra_stack import WebsiteAppStack

app = App()
WebsiteAppStack(app, "WebsiteAppStack", env={
    "account": os.getenv("CDK_DEFAULT_ACCOUNT"),
    "region": os.getenv("CDK_DEFAULT_REGION"),
})
app.synth() 