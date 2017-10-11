# Package Description

[![Latest Version on Packagist](https://img.shields.io/packagist/v/arubacao/tld-checker.svg?style=flat-square)](https://packagist.org/packages/arubacao/tld-checker)
[![Build Status](https://img.shields.io/travis/arubacao/tld-checker/master.svg?style=flat-square)](https://travis-ci.org/arubacao/tld-checker)
[![codecov](https://codecov.io/gh/arubacao/tld-checker/branch/master/graph/badge.svg?style=flat-square)](https://codecov.io/gh/arubacao/tld-checker)
[![Quality Score](https://img.shields.io/scrutinizer/g/arubacao/tld-checker.svg?style=flat-square)](https://scrutinizer-ci.com/g/arubacao/tld-checker)
[![Total Downloads](https://img.shields.io/packagist/dt/arubacao/tld-checker.svg?style=flat-square)](https://packagist.org/packages/arubacao/tld-checker)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This package allows validation of top level domains against the known list of valid TLDs

## Installation
You can install the package via composer:

```bash
composer require arubacao/tld-checker
```

## Usage
You can check a TLD directly using `Validator::isTld()`
``` php
use Arubacao\TldChecker\Validator;

$success = Validator::isTld('com');     // true
$success = Validator::isTld('CN');      // true
$success = Validator::isTld('apricot'); // false

```

You can also check that a string ends with a valid TLD using `Validator::endsWithTld()`
``` php
use Arubacao\TldChecker\Validator;

$success = Validator::endsWithTld('apple.com');       // true
$success = Validator::endsWithTld('NEWS.CN');         // true
$success = Validator::endsWithTld('farming.apricot'); // false

```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Christopher Lass](https://github.com/arubacao)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
