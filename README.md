# TLD Checker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/arubacao/tld-checker.svg?style=flat-square)](https://packagist.org/packages/arubacao/tld-checker)
[![Build Status](https://img.shields.io/travis/arubacao/tld-checker/master.svg?style=flat-square)](https://travis-ci.org/arubacao/tld-checker)
[![codecov](https://codecov.io/gh/arubacao/tld-checker/branch/master/graph/badge.svg?style=flat-square)](https://codecov.io/gh/arubacao/tld-checker)
[![Quality Score](https://img.shields.io/scrutinizer/g/arubacao/tld-checker.svg?style=flat-square)](https://scrutinizer-ci.com/g/arubacao/tld-checker)
[![Total Downloads](https://img.shields.io/packagist/dt/arubacao/tld-checker.svg?style=flat-square)](https://packagist.org/packages/arubacao/tld-checker)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

Validates a string to determine if it is a TLD(Top Level Domain) or ends with a TLD
* Unicode support
* Laravel Validator Extension

## Installation

You can install the package via composer:

```bash
composer require arubacao/tld-checker
```

## Usage
### Standalone

``` php
use Arubacao\TldChecker\Validator

// Is it a TLD
Validator::isTld('COM')
// returns true

Validator::isTld('FOO')
// returns false

// Does it end with a TLD
Validator::endsWithTld('GOOGLE.COM')
// returns true

Validator::endsWithTld('GOOGLE.COMM')
// returns false

```

### Extend Laravel Validator

#### Register the Service Provider 

```PHP
'providers' => [
    // Other Service Providers
    Arubacao\TldChecker\Validator::class,
],
```

#### Use the Validator
```PHP
$request->validate([
    'tld' => 'required|is_tld'
    'email' => 'required|ends_with_tld'
]);
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Christopher Lass](https://github.com/arubacao)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
