# Top Level Domain (TLD) validation library for PHP

[![Latest Version on Packagist](https://img.shields.io/packagist/v/arubacao/tld-checker.svg?style=flat-square)](https://packagist.org/packages/arubacao/tld-checker)
[![CI](https://img.shields.io/github/actions/workflow/status/arubacao/tld-checker/ci.yml?branch=master&label=ci&style=flat-square)](https://github.com/arubacao/tld-checker/actions/workflows/ci.yml)
[![IANA TLD Update](https://img.shields.io/github/actions/workflow/status/arubacao/tld-checker/update-tld-database.yml?branch=master&label=iana%20update&style=flat-square)](https://github.com/arubacao/tld-checker/actions/workflows/update-tld-database.yml)
[![Quality Score](https://img.shields.io/scrutinizer/g/arubacao/tld-checker.svg?style=flat-square)](https://scrutinizer-ci.com/g/arubacao/tld-checker)
[![Total Downloads](https://img.shields.io/packagist/dt/arubacao/tld-checker.svg?style=flat-square)](https://packagist.org/packages/arubacao/tld-checker)

This package allows **validation** of **top level domains** against the official [The DNS Root Zone](https://www.iana.org/domains/root) database from [iana.org](https://www.iana.org/).  
Use this to validate e.g. **domains** or **email addresses**.  
> [The DNS Root Zone](https://www.iana.org/domains/root) is the upper-most part of the DNS hierarchy, and involves delegating administrative responsibility of “top-level domains”, which are the last segment of a domain name, such as .com, .uk and .nz.

*The database is stored [locally](src/RootZoneDatabase.php) and automatically updated for new database versions.*  

## Installation
Install this package via composer:

```bash
composer require arubacao/tld-checker
```

#### Laravel

If you would like to use `arubacao/tld-checker` with the [Laravel Validator](https://laravel.com/docs/validation/latest), you must also register the service provider:  
*(only required for Laravel `<=5.4`, for Laravel `>=5.5` [auto-discovery](composer.json#L36) is enabled.)*
```PHP
// config/app.php

'providers' => [
    // Other Service Providers
    Arubacao\TldChecker\TldCheckerServiceProvider::class,
],
```
Notes:  

 - `arubacao/tld-checker` is tested with GitHub Actions for PHP `7.0` - `8.1` & Laravel `5.0` - `9.x`.
## Usage
Check a TLD using `Validator::isTld()`:
``` php
use Arubacao\TldChecker\Validator;

Validator::isTld('com');        // true
Validator::isTld('CN');         // true (case insensitiv)
Validator::isTld('москва');     // true (works with internationalized domain name (IDN) | unicode)
Validator::isTld('XN--CZRS0T'); // true (works with encoded IDN | 商店)
Validator::isTld('.org');       // true (allows dot prefix)
Validator::isTld('apricot');    // false
```

Check if a string ends with a valid TLD using `Validator::endsWithTld()`:
``` php
use Arubacao\TldChecker\Validator;

Validator::endsWithTld('apple.com');                            // true
Validator::endsWithTld('NEWS.CN');                              // true (case insensitiv)
Validator::endsWithTld('müller.vermögensberater');              // true (works with internationalized domain name (IDN) | unicode)
Validator::endsWithTld('xn--mller-kva.xn--vermgensberater-ctb');// true (works with encoded IDN | müller.vermögensberater)
Validator::endsWithTld('farming.apricot');                      // false

```

This package extends the [Laravel Validator](https://laravel.com/docs/validation/latest) with these 2 methods:
  
  - `is_tld`
  - `ends_with_tld`
 
Use them as follows:
```PHP
$request->validate([
    'tld' => 'required|is_tld',
    'email' => 'required|ends_with_tld'
]);
```

## Testing

``` bash
composer test
```

## Maintenance

Refresh the generated IANA database locally:

``` bash
composer build
```

The repository also has a scheduled GitHub Actions workflow that runs every Sunday at `04:01 UTC`. If IANA has published a new root zone version, the workflow commits the refreshed `src/RootZoneDatabase.php` file and tags the next patch release so Packagist can pick it up.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

- [Christopher Lass](https://github.com/arubacao)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
