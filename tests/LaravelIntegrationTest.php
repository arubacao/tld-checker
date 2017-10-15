<?php

namespace Arubacao\TldChecker\Test;

class LaravelIntegrationTest extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Arubacao\TldChecker\TldCheckerServiceProvider::class];
    }

    /** @test */
    public function is_tld_does_not_fail_if_domain_is_tld()
    {
        $validTlds = [
            ['tld' => 'com'],
            ['tld' => 'CoM'],
            ['tld' => '.CoM'],
            ['tld' => '.ভাৰত'],
            ['tld' => 'ファッション'],
            ['tld' => 'XN--VERMGENSBERATUNG-PWB'],
        ];

        foreach ($validTlds as $tld) {
            $validator = \Validator::make($tld, [
                'tld' => 'is_tld',
            ]);

            $this->assertFalse($validator->fails());
        }
    }

    /** @test */
    public function is_tld_fails_if_domain_is_not_tld()
    {
        $invalidTlds = [
            ['tld' => 'coom'],
            ['tld' => '.C.o.M'],
            ['tld' => 'Blablbal'],
            ['tld' => 'c o m'],
            ['tld' => 'рaф'],
            ['tld' => 'ققط'],
        ];

        foreach ($invalidTlds as $tld) {
            $validator = \Validator::make($tld, [
                'tld' => 'is_tld',
            ]);

            $this->assertTrue($validator->fails());
        }
    }

    /** @test */
    public function ends_with_tld_does_not_fail_when_domain_ends_with_tld()
    {
        $validTlds = [
            ['tld' => 'google.com'],
            ['tld' => 'gOOgle.CoM'],
            ['tld' => 'кто.рф'],
            ['tld' => 'Deutsche.Vermögensberatung.vermögensberater'],
            ['tld' => 'الاعلى-للاتصالات.قطر'],
        ];

        foreach ($validTlds as $tld) {
            $validator = \Validator::make($tld, [
                'tld' => 'ends_with_tld',
            ]);

            $this->assertFalse($validator->fails());
        }
    }

    /** @test */
    public function ends_with_tld_fails_when_domain_does_not_end_with_tld()
    {
        $invalidTlds = [
            ['tld' => 'googlecoom'],
            ['tld' => 'gooogle.C.o.M'],
            ['tld' => 'google.Blablbal'],
            ['tld' => 'google.c o m'],
            ['tld' => 'кто.рaф'],
            ['tld' => 'الاعلى-للاتصالات.ققط'],
        ];

        foreach ($invalidTlds as $tld) {
            $validator = \Validator::make($tld, [
                'tld' => 'ends_with_tld',
            ]);

            $this->assertTrue($validator->fails());
        }
    }

    /** @test */
    public function is_tld_fails_and_has_message_when_domain_is_not_tld()
    {
        $validator = \Validator::make([
            'invalid' => 'coom',
        ], [
            'invalid' => 'is_tld',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertSame('The invalid field is not a valid tld.', $validator->messages()->first());
    }

    /** @test */
    public function ends_with_tld_fails_and_has_message_when_domain_does_not_end_with_tld()
    {
        $validator = \Validator::make([
            'invalid' => 'googlecoom',
        ], [
            'invalid' => 'ends_with_tld',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertSame('The invalid field does not end with a valid tld.', $validator->messages()->first());
    }
}
