# Changelog

All notable changes to `tld-checker` will be documented in this file

## Unreleased

## 2.0.0 - 2026-05-26

- Require PHP 8.1+ for the next maintained release line
- Add GitHub Actions coverage for Laravel 9.x through 13.x on PHP 8.1 through 8.5
- Allow orchestra/testbench 8 through 11 and PHPUnit 10 through 12 for modern Laravel testing
- Modernize the PHPUnit configuration so it works across PHPUnit 9 through 12
- Return `false` for non-string validator input instead of raising PHP 8 TypeErrors
- Fix GitHub Actions CI for legacy Laravel/PHP test lanes
- Avoid relying on Laravel's global `Validator` alias in package bootstrapping
- Replace a removed IANA IDN test fixture with a current TLD
- Bump `actions/checkout` to v6

## 1.3.0 - 2026-05-26

- Add Laravel 9 / orchestra-testbench 7 support
- Replace Travis CI with GitHub Actions for the test matrix
- Restore scheduled IANA root zone database updates via GitHub Actions
- Refresh `RootZoneDatabase` to IANA version `2026052600`
- Harden the database build script and keep generated output StyleCI-compatible

## 1.2.X - 2019-01-09

- No breaking changes
- Add `VERSION` constant to `RootZoneDatabase`
- Automatic tagged updates to `RootZoneDatabase` _only_ when `VERSION` changes 

## 1.1.X - 2017-12-01

- Use `INTL_IDNA_VARIANT_UTS46` instead of `INTL_IDNA_VARIANT_2003` in `idn_to_ascii()` method

## 1.0.X - 2017-11-25

- Initial release
