AwsBundle
=========

A simple wrapper around the AWS PHP SDK 2 for Symfony2

## Installation

### Add to Composer

Add the following to your projects composer.json

```json
{
    "require": {
        "lightmaker/aws-bundle": "1.0.*"
    }
}
```

### Update your Kernel

```php
#AppKernel.php
public function registerBundles() {
  $bundles = array(
    new Lightmaker\AwsBundle\LightmakerAwsBundle()
  );
}
```

### Add Configuration

```
# app/config/config.yml
lightmaker_aws:
    key:    %aws_key%
    secret: %aws_secret%
    region: %aws_region%
```

```
# app/config/parameters.yml.dist
parameters:
    aws_key:
    aws_secret:
    aws_region:
```

`composer.phar update`

You can now access the AWS SDK through the container or dependency injection.

`$this->get("lightmaker_aws")->get('s3');`

See the AWS SDK for PHP 2 docs for more info
http://docs.aws.amazon.com/aws-sdk-php/guide/latest/index.html

