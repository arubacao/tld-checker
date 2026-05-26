# Changelog

All notable changes to `tld-checker` will be documented in this file

## Unreleased

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
