<?php
namespace Arubacao\TldChecker;

class Validator
{
    /**
     * Checks if value is valid tld.
     *
     * @param  mixed $value
     * @return boolean
     */
    public static function isTld($value)
    {
        $value = ltrim($value, ".");
        $value = idn_to_ascii($value);
        $value = strtoupper($value);

        if (in_array($value, RootZoneDatabase::TLDS)) {
            return true;
        }
        return false;
    }

    /**
     * Checks if value is valid tld.
     *
     * @param  mixed $value
     * @return boolean
     */
    public static function endsWithTld($value)
    {
        $parts = explode(".", $value);
        $end = end($parts);

        return self::isTld($end);
    }
}