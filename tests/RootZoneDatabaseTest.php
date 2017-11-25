<?php

namespace Arubacao\TldChecker\Test;

use PHPUnit\Framework\TestCase;
use Arubacao\TldChecker\RootZoneDatabase;

class RootZoneDatabaseTest extends TestCase
{
    /**
     * @test
     */
    public function database_has_more_than_1500_entries()
    {
        $this->assertGreaterThan(1500, count(RootZoneDatabase::TLDS));
    }

    /**
     * @test
     */
    public function spot_check_database()
    {
        $this->assertContains('COM', RootZoneDatabase::TLDS);
        $this->assertContains('RU', RootZoneDatabase::TLDS);
        $this->assertContains('ORG', RootZoneDatabase::TLDS);
        $this->assertContains('NET', RootZoneDatabase::TLDS);
        $this->assertContains('DE', RootZoneDatabase::TLDS);
        $this->assertContains('JP', RootZoneDatabase::TLDS);
        $this->assertContains('UK', RootZoneDatabase::TLDS);
        $this->assertContains('BR', RootZoneDatabase::TLDS);
        $this->assertContains('IT', RootZoneDatabase::TLDS);
        $this->assertContains('PL', RootZoneDatabase::TLDS);
        $this->assertContains('FR', RootZoneDatabase::TLDS);
        $this->assertContains('IN', RootZoneDatabase::TLDS);
        $this->assertContains('IR', RootZoneDatabase::TLDS);
        $this->assertContains('AU', RootZoneDatabase::TLDS);
        $this->assertContains('INFO', RootZoneDatabase::TLDS);
        $this->assertContains('CN', RootZoneDatabase::TLDS);
        $this->assertContains('NL', RootZoneDatabase::TLDS);
        $this->assertContains('ES', RootZoneDatabase::TLDS);
        $this->assertContains('CZ', RootZoneDatabase::TLDS);
        $this->assertContains('KR', RootZoneDatabase::TLDS);
        $this->assertContains('CA', RootZoneDatabase::TLDS);
        $this->assertContains('UA', RootZoneDatabase::TLDS);
        $this->assertContains('IO', RootZoneDatabase::TLDS);
        $this->assertContains('XYZ', RootZoneDatabase::TLDS);
        $this->assertContains('DOWNLOAD', RootZoneDatabase::TLDS);
        $this->assertContains('ONLINE', RootZoneDatabase::TLDS);
        $this->assertContains('BAYERN', RootZoneDatabase::TLDS);
        $this->assertContains('EE', RootZoneDatabase::TLDS);
        $this->assertContains('XN--CLCHC0EA0B2G2A9GCD', RootZoneDatabase::TLDS);
        $this->assertContains('XN--CZRS0T', RootZoneDatabase::TLDS);
        $this->assertContains('XN--VERMGENSBERATUNG-PWB', RootZoneDatabase::TLDS);
    }
}
