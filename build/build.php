<?php

/**
 * Compile Root Zone Database source file.
 *
 * This build script will download Root Zone Database
 * and reformat it in a way that is friendlier to use.
 *
 * This script should be run via php-cli.
 *
 *
 * @author    Christopher Lass <arubacao@gmail.com>
 */
$start = microtime(true);

define('ROOT_ZONE_DATABASE', 'https://data.iana.org/TLD/tlds-alpha-by-domain.txt');
define('ROOT_ZONE_DATABASE_MD5', 'https://data.iana.org/TLD/tlds-alpha-by-domain.txt.md5');

define('TEMPLATE', dirname(__DIR__).'/build/data.template');
define('OUTPUT_FILE', dirname(__DIR__).'/src/RootZoneDatabase.php');

if (file_exists(OUTPUT_FILE)) {
    require_once OUTPUT_FILE;
}

echo "Get New Root Zone Database\n";
$root_zone_data = file_get_contents(ROOT_ZONE_DATABASE);
$root_zone_data_md5 = explode(' ', file_get_contents(ROOT_ZONE_DATABASE_MD5))[0];

echo "Validating Data\n";
if (md5($root_zone_data) !== $root_zone_data_md5) {
    throw new \Exception("Invalid MD5 hash\n");
}

$tlds = explode("\n", $root_zone_data);
$tlds = array_filter($tlds, function ($tld) {
    return $tld != '';
});

$root_zone_data_version_line = array_shift($tlds);
preg_match('/Version (.*?),/', $root_zone_data_version_line, $root_zone_data_version);
$root_zone_data_version = $root_zone_data_version[1];

if (count($tlds) <= 1400) {
    throw new \Exception("TLDs array is too small. Something must went wrong.\n");
}
if (0 !== strpos($root_zone_data_version_line, '#')) {
    throw new \Exception("Version does not match typical pattern. Something must went wrong.\n");
}
if (
    // Check Version
    defined('Arubacao\TldChecker\RootZoneDatabase::VERSION') &&
    $root_zone_data_version == Arubacao\TldChecker\RootZoneDatabase::VERSION &&
    // Check TLDs
    defined('Arubacao\TldChecker\RootZoneDatabase::TLDS') &&
    $tlds == Arubacao\TldChecker\RootZoneDatabase::TLDS
) {
    echo "Root Zone Database is Identical.\n";
    exit(0);
}

// Format array to nice string representation
$tldsFormatted = '['.PHP_EOL;
foreach ($tlds as $tld) {
    $tldsFormatted .= "        '$tld' => null,".PHP_EOL;
}
$tldsFormatted .= '    ]';

$replacements = [
    '%VERSION_LINE%' => $root_zone_data_version_line,
    '%VERSION%' => $root_zone_data_version,
    '%TLDS%' => $tldsFormatted,
];
$output = file_get_contents(TEMPLATE);
$output = str_replace(array_keys($replacements), array_values($replacements), $output);

echo "Storing new database\n";
file_put_contents(OUTPUT_FILE, $output);

$end = microtime(true);
printf("Time used in seconds: %f\n", $end - $start);
exit(0);
