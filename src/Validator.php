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
        $value = ltrim($value, '.');
        $value = idn_to_ascii($value, 0, INTL_IDNA_VARIANT_UTS46);
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
        $parts = explode('.', $value);
        $end = end($parts);

        return self::isTld($end);
    }
}
