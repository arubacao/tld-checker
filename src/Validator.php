<?php

namespace Arubacao\TldChecker;

class Validator
{
    /**
     * Checks if value is valid tld.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function isTld($value)
    {
        $value = self::normalizeStringValue($value);

        if (null === $value) {
            return false;
        }

        $value = ltrim($value, '.');
        $value = idn_to_ascii($value, 0, INTL_IDNA_VARIANT_UTS46);

        if (false === $value) {
            return false;
        }

        $value = strtoupper($value);

        if (array_key_exists($value, RootZoneDatabase::TLDS)) {
            return true;
        }

        return false;
    }

    /**
     * Checks if value is valid tld.
     *
     * @param  mixed  $value
     * @return bool
     */
    public static function endsWithTld($value)
    {
        $value = self::normalizeStringValue($value);

        if (null === $value) {
            return false;
        }

        $parts = explode('.', $value);
        $end = end($parts);

        return self::isTld($end);
    }

    /**
     * @param  mixed  $value
     * @return string|null
     */
    private static function normalizeStringValue($value)
    {
        if (is_object($value) && method_exists($value, '__toString')) {
            return (string) $value;
        }

        if (! is_scalar($value)) {
            return null;
        }

        return (string) $value;
    }
}
