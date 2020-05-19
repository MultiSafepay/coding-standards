<p align="center">
  <img src="https://www.multisafepay.com/img/multisafepaylogo.svg" width="400px" position="center">
</p>

# MultiSafepay plugin coding standards

Easily integrate the MultiSafepay plugin coding standards into the latest plugins.

[![License](https://img.shields.io/packagist/l/multisafepay/coding-standards.svg)](https://github.com/MultiSafepay/coding-standards/blob/master/LICENSE)

## Description

## Installation
Use the package manager [composer](https://getcomposer.org/) to install the MultiSafepay coding standards for plugins.
```bash
composer require multisafepay/coding-standards --dev
```

## Usage
The best way to use the MultiSafepay coding standard is to use composer scripts. 
You can choose from Multiple PHP versions.

```json
{
    "scripts": {
        "code-sniffer": "@php vendor/bin/ecs check -c vendor/multisafepay/coding-standards/php71.yml src tests --clear-cache",
        "fix-cs": "@code-sniffer --fix"
    }
}
```

### Ovewriting data
*_todo_*

## Sets that we support
* PHP 5.6*
* PHP 7.0*
* PHP 7.1
* Magento 2*
* WooCommerce*

\* Will be added soon

## Contributing
Please open an issue first to discuss the changes you want to implement.

## Licence
[MIT Licence](https://github.com/MultiSafepay/coding-standards/blob/master/LICENSE)

## Want to be part of the team?
Are you a developer interested in working at MultiSafepay? [View](https://www.multisafepay.com/careers/#jobopenings) our job openings and feel free to get in touch with us.
