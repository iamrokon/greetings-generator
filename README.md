# This is my very first php package.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/iamrokon/greetings-generator.svg?style=flat-square)](https://packagist.org/packages/iamrokon/greetings-generator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/iamrokon/greetings-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/iamrokon/greetings-generator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/iamrokon/greetings-generator/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/iamrokon/greetings-generator/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/iamrokon/greetings-generator.svg?style=flat-square)](https://packagist.org/packages/iamrokon/greetings-generator)


## Installation

You can install the package via composer:

```bash
composer require iamrokon/greetings-generator
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="greetings-generator-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="greetings-generator-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="greetings-generator-views"
```

## Usage

```php
use Rokon\GreetingsGenerator\Greetings;
echo Greetings::greet();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [rokon](https://github.com/iamrokon)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
