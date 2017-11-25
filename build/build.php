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

define('TEMPLATE', dirname(__FILE__).'/data.template');
define('OUTPUT_FILE', dirname(__FILE__).'./../src/RootZoneDatabase.php');

echo "Get Root Zone Database\n";
$root_zone_data = file_get_contents(ROOT_ZONE_DATABASE);
$root_zone_data_md5 = explode(' ', file_get_contents(ROOT_ZONE_DATABASE_MD5))[0];

echo "Validating data\n";
if (md5($root_zone_data) !== $root_zone_data_md5) {
    throw new \Exception("Invalid MD5 hash\n");
}

$tlds = explode("\n", $root_zone_data);
$tlds = array_filter($tlds, function ($tld) {
    return $tld != '';
});
$root_zone_data_version = array_shift($tlds);

if (count($tlds) <= 1500) {
    throw new \Exception("TLDs array is too small. Something must went wrong.\n");
}
if (0 !== strpos($root_zone_data_version, '#')) {
    throw new \Exception("Version does not match typical pattern. Something must went wrong.\n");
}

$replacements = [
    '%GENERATED%' => date('Y-m-d H:i:s'),
    '%VERSION%'   => $root_zone_data_version,
    '%TLDS%'      => var_export($tlds, true),
];
$output = file_get_contents(TEMPLATE);
$output = str_replace(array_keys($replacements), array_values($replacements), $output);

echo "Storing new database\n";
file_put_contents(OUTPUT_FILE, $output);

$end = microtime(true);
printf("Time used in seconds: %f\n", $end - $start);
exit(0);
