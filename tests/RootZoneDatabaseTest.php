<?php

namespace Arubacao\TldChecker\Test;

use Arubacao\TldChecker\RootZoneDatabase;
use PHPUnit\Framework\TestCase;

class RootZoneDatabaseTest extends TestCase
{
    /**
     * @test
     */
    public function database_has_more_than_1500_entries()
    {
        $this->assertGreaterThan(1400, count(RootZoneDatabase::TLDS));
    }

    /**
     * @test
     */
    public function spot_check_database()
    {
        $this->assertArrayHasKey('COM', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('RU', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('ORG', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('NET', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('DE', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('JP', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('UK', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('BR', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('IT', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('PL', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('FR', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('IN', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('IR', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('AU', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('INFO', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('CN', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('NL', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('ES', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('CZ', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('KR', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('CA', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('UA', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('IO', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('XYZ', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('DOWNLOAD', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('ONLINE', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('BAYERN', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('EE', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('XN--CLCHC0EA0B2G2A9GCD', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('XN--CZRS0T', RootZoneDatabase::TLDS);
        $this->assertArrayHasKey('XN--VERMGENSBERATUNG-PWB', RootZoneDatabase::TLDS);
    }
}
