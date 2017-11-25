<?php

namespace Arubacao\TldChecker\Test;

use PHPUnit\Framework\TestCase;
use Arubacao\TldChecker\Validator;

class ValidatorTest extends TestCase
{
    /**
     * @test
     */
    public function test_valid_domains_with_isTld()
    {
        $this->assertTrue(Validator::isTld('COM'));
        $this->assertTrue(Validator::isTld('RU'));
        $this->assertTrue(Validator::isTld('ORG'));
        $this->assertTrue(Validator::isTld('NET'));
        $this->assertTrue(Validator::isTld('DE'));
        $this->assertTrue(Validator::isTld('JP'));
        $this->assertTrue(Validator::isTld('UK'));
        $this->assertTrue(Validator::isTld('BR'));
        $this->assertTrue(Validator::isTld('IT'));
        $this->assertTrue(Validator::isTld('PL'));
        $this->assertTrue(Validator::isTld('FR'));
        $this->assertTrue(Validator::isTld('IN'));
        $this->assertTrue(Validator::isTld('IR'));
        $this->assertTrue(Validator::isTld('AU'));
        $this->assertTrue(Validator::isTld('INFO'));
        $this->assertTrue(Validator::isTld('CN'));
        $this->assertTrue(Validator::isTld('NL'));
        $this->assertTrue(Validator::isTld('ES'));
        $this->assertTrue(Validator::isTld('CZ'));
        $this->assertTrue(Validator::isTld('KR'));
        $this->assertTrue(Validator::isTld('CA'));
        $this->assertTrue(Validator::isTld('UA'));
        $this->assertTrue(Validator::isTld('DOWNLOAD'));
        $this->assertTrue(Validator::isTld('ONLINE'));
        $this->assertTrue(Validator::isTld('BAYERN'));
        $this->assertTrue(Validator::isTld('EE'));
        $this->assertTrue(Validator::isTld('XN--CLCHC0EA0B2G2A9GCD'));
        $this->assertTrue(Validator::isTld('XN--CZRS0T'));
        $this->assertTrue(Validator::isTld('XN--VERMGENSBERATUNG-PWB'));
    }

    /**
     * @test
     */
    public function isTld_allows_leading_dots()
    {
        $this->assertTrue(Validator::isTld('.COM'));
        $this->assertTrue(Validator::isTld('.DE'));
    }

    /**
     * @test
     */
    public function test_valid_domains_with_endsWithTld()
    {
        $this->assertTrue(Validator::endsWithTld('GOOGLE.COM'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.RU'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.ORG'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.NET'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.DE'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.JP'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.UK'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.BR'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.IT'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.PL'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.FR'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.IN'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.IR'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.AU'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.INFO'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.CN'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.NL'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.ES'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.CZ'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.KR'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.CA'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.UA'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.DOWNLOAD'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.ONLINE'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.BAYERN'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.EE'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.XN--CLCHC0EA0B2G2A9GCD'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.XN--CZRS0T'));
        $this->assertTrue(Validator::endsWithTld('GOOGLE.XN--VERMGENSBERATUNG-PWB'));
    }

    /**
     * @test
     */
    public function test_invalid_domains_with_itTld()
    {
        $this->assertFalse(Validator::isTld('COMM'));
        $this->assertFalse(Validator::isTld('CCOM'));
        $this->assertFalse(Validator::isTld('BLABLA'));
        $this->assertFalse(Validator::isTld('CO M'));
        $this->assertFalse(Validator::isTld('CÖM'));
        $this->assertFalse(Validator::isTld('D.E'));
    }

    /**
     * @test
     */
    public function test_invalid_domains_with_endsWithTld()
    {
        $this->assertFalse(Validator::isTld('GOOGLE.COMM'));
        $this->assertFalse(Validator::isTld('GOOGLE.CCOM'));
        $this->assertFalse(Validator::isTld('GOOGLE.BLABLA'));
        $this->assertFalse(Validator::isTld('GOOGLE.CO M'));
        $this->assertFalse(Validator::isTld('GOOGLE.CÖM'));
        $this->assertFalse(Validator::isTld('GOOGLE.D.E'));
    }

    /**
     * @test
     */
    public function isTld_is_case_insensitive()
    {
        $this->assertTrue(Validator::isTld('com'));
        $this->assertTrue(Validator::isTld('coM'));
        $this->assertTrue(Validator::isTld('CoM'));
        $this->assertTrue(Validator::isTld('.CoM'));
    }

    /**
     * @test
     */
    public function endsWithTld_is_case_insensitive()
    {
        $this->assertTrue(Validator::endsWithTld('GooGlE.com'));
        $this->assertTrue(Validator::endsWithTld('gooGle.coM'));
        $this->assertTrue(Validator::endsWithTld('GooGLE.CoM'));
    }

    /**
     * @test
     */
    public function isTld_works_with_unicode_domains()
    {
        $this->assertTrue(Validator::isTld('ଭାରତ'));
        $this->assertTrue(Validator::isTld('大众汽车'));
        $this->assertTrue(Validator::isTld('ভাৰত'));
        $this->assertTrue(Validator::isTld('москва'));
        $this->assertTrue(Validator::isTld('католик'));
        $this->assertTrue(Validator::isTld('קום'));
        $this->assertTrue(Validator::isTld('ファッション'));
        $this->assertTrue(Validator::isTld('المغرب'));
        $this->assertTrue(Validator::isTld('كاثوليك'));
        $this->assertTrue(Validator::isTld('مليسيا'));
        $this->assertTrue(Validator::isTld('рф'));
        $this->assertTrue(Validator::isTld('இந்தியா'));
        $this->assertTrue(Validator::isTld('vermögensberater'));
    }

    /**
     * @test
     */
    public function endsWithTld_works_with_unicode_domains()
    {
        $this->assertTrue(Validator::endsWithTld('الاعلى-للاتصالات.قطر'));
        $this->assertTrue(Validator::endsWithTld('кто.рф'));
        $this->assertTrue(Validator::endsWithTld('www.இந.இந்தியா'));
        $this->assertTrue(Validator::endsWithTld('Deutsche.Vermögensberatung.vermögensberater'));
    }
}
