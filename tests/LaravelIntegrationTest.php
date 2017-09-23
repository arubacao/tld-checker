<?php

namespace Arubacao\TldChecker\Test;

class LaravelIntegrationTest extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Arubacao\TldChecker\TldCheckerServiceProvider::class];
    }

    /**
     * @test
     */
    public function test_valid_domains_with_is_tld()
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
            /** @var \Illuminate\Validation\Validator $validator */
            $validator = \Validator::make($tld, [
                'tld' => 'is_tld',
            ]);

            $this->assertFalse($validator->fails());
        }
    }

    /**
     * @test
     */
    public function test_invalid_domains_with_is_tld()
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
            /** @var \Illuminate\Validation\Validator $validator */
            $validator = \Validator::make($tld, [
                'tld' => 'is_tld',
            ]);

            $this->assertTrue($validator->fails());
        }
    }

    /**
     * @test
     */
    public function test_valid_domains_with_ends_with_tld()
    {
        $validTlds = [
            ['tld' => 'google.com'],
            ['tld' => 'gOOgle.CoM'],
            ['tld' => 'кто.рф'],
            ['tld' => 'Deutsche.Vermögensberatung.vermögensberater'],
            ['tld' => 'الاعلى-للاتصالات.قطر'],
        ];

        foreach ($validTlds as $tld) {
            /** @var \Illuminate\Validation\Validator $validator */
            $validator = \Validator::make($tld, [
                'tld' => 'ends_with_tld',
            ]);

            $this->assertFalse($validator->fails());
        }
    }

    /**
     * @test
     */
    public function test_invalid_domains_with_ends_with_tld()
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
            /** @var \Illuminate\Validation\Validator $validator */
            $validator = \Validator::make($tld, [
                'tld' => 'ends_with_tld',
            ]);

            $this->assertTrue($validator->fails());
        }
    }

    /**
     * @test
     */
    public function is_tld_throws_error_message()
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = \Validator::make([
            'invalid' => 'coom',
        ], [
            'invalid' => 'is_tld',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertSame('The invalid field is not a valid tld.', $validator->messages()->first());
    }

    /**
     * @test
     */
    public function ends_with_tld_throws_error_message()
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = \Validator::make([
            'invalid' => 'googlecoom',
        ], [
            'invalid' => 'ends_with_tld',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertSame('The invalid file does not end with a valid tld.', $validator->messages()->first());
    }
}
