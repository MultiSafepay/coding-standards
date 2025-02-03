<p align="center">
  <img src="https://raw.githubusercontent.com/MultiSafepay/MultiSafepay-logos/master/MultiSafepay-logo-color.svg" width="400px" position="center">
</p>

# MultiSafepay plugin coding standards

Easily integrate the MultiSafepay plugin coding standards into the latest plugins.

[![License](https://img.shields.io/packagist/l/multisafepay/coding-standards.svg)](https://github.com/MultiSafepay/coding-standards/blob/master/LICENSE)

## Description

## Installation
Use the package manager [composer](https://getcomposer.org/) to install the MultiSafepay coding standards for plugins.
```bash
composer require multisafepay/coding-standards:dev-master --dev
```

## Usage
The best way to use the MultiSafepay coding standard is to use composer scripts. 
You can choose from multiple PHP versions.

```json
{
    "scripts": {
        "code-sniffer": "@php vendor/bin/phpcs --standard=vendor/multisafepay/coding-standards/php71.phpcs.xml src",
        "fix-cs": "@php @php vendor/bin/phpcbf --standard=vendor/multisafepay/coding-standards/php71.phpcs.xml src"
    }
}
```

### Overwriting data
You can overwrite the MultiSafepay coding standard if they conflict with the ecommerce platform. You can import the MultiSafepay coding standard and add, edit or remove certain checks

Create phpcs.xml.dist in the root of your project
```xml
<?xml version="1.0"?>
<ruleset name="MultiSafepay-Extended">
    <rule ref="./vendor/multisafepay/coding-standards/php71.phpcs.xml"/>
    <exclude ref="certain.rule"/>
    
    <!-- To add a max version to your project, change the value of testVersion to PHP_MIN_VERSION-PHP_MAX_VERSION -->
    <config name="testVersion" value="7.1-"/>
</ruleset>

```

## Contributing
Please open an issue first to discuss the changes you want to implement.

## Licence
[MIT Licence](https://github.com/MultiSafepay/coding-standards/blob/master/LICENSE)

## Want to be part of the team?
Are you a developer interested in working at MultiSafepay? [View](https://www.multisafepay.com/careers/#jobopenings) our job openings and feel free to get in touch with us.
