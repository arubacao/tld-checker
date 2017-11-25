# Top Level Domain (TLD) validation library for PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/arubacao/tld-checker.svg?style=flat-square)](https://packagist.org/packages/arubacao/tld-checker)
[![Build Status](https://img.shields.io/travis/arubacao/tld-checker/master.svg?style=flat-square)](https://travis-ci.org/arubacao/tld-checker)
[![codecov](https://codecov.io/gh/arubacao/tld-checker/branch/master/graph/badge.svg?style=flat-square)](https://codecov.io/gh/arubacao/tld-checker)
[![Quality Score](https://img.shields.io/scrutinizer/g/arubacao/tld-checker.svg?style=flat-square)](https://scrutinizer-ci.com/g/arubacao/tld-checker)
[![Total Downloads](https://img.shields.io/packagist/dt/arubacao/tld-checker.svg?style=flat-square)](https://packagist.org/packages/arubacao/tld-checker)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)

This package allows **validation** of **top level domains** against the official [The DNS Root Zone](https://www.iana.org/domains/root) database from [iana.org](iana.org).  
Use this to validate e.g. **domains** or **email addresses**.  
> [The DNS Root Zone](https://www.iana.org/domains/root) is the upper-most part of the DNS hierarchy, and involves delegating administrative responsibility of “top-level domains”, which are the last segment of a domain name, such as .com, .uk and .nz.

*The database is stored [locally](src/RootZoneDatabase.php) and is updated every week.*  

## Installation
Install this package via composer:

```bash
composer require arubacao/tld-checker
```

#### Laravel

If you would like to use `arubacao/tld-checker` with the [Laravel Validator](https://laravel.com/docs/validation/latest), you must also register the service provider:
```PHP
// config/app.php

'providers' => [
    // Other Service Providers
    Arubacao\TldChecker\Validator::class,
],
```
Notes:  

 - only required for Laravel `<=5.4`, for Laravel `>=5.5` [auto-discovery](composer.json#L55) is enabled.
 - `arubacao/tld-checker` is functional and fully tested for Laravel `5.0`, `5.1`, `5.2`, `5.3`, `5.4`, `5.5`.  
## Usage
Check a TLD using `Validator::isTld()`:
``` php
use Arubacao\TldChecker\Validator;

$success = Validator::isTld('com');     // true
$success = Validator::isTld('CN');      // true (case insensitiv)
$success = Validator::isTld('.org');    // true (allows dot prefix)
$success = Validator::isTld('apricot'); // false
```

Check if a string ends with a valid TLD using `Validator::endsWithTld()`:
``` php
use Arubacao\TldChecker\Validator;

$success = Validator::endsWithTld('apple.com');       // true
$success = Validator::endsWithTld('NEWS.CN');         // true (case insensitiv)
$success = Validator::endsWithTld('farming.apricot'); // false

```

This package extends the [Laravel Validator](https://laravel.com/docs/validation/latest) with these 2 methods:
  
  - `is_tld`
  - `ends_with_tld`
 
Use them as follows:
```PHP
$request->validate([
    'tld' => 'required|is_tld'
    'email' => 'required|ends_with_tld'
]);
```

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
