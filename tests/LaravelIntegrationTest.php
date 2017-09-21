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
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = \Validator::make([
            'valid' => [
                ['tld' => 'com'],
                ['tld' => 'CoM'],
                ['tld' => '.CoM'],
                ['tld' => '.ভাৰত'],
                ['tld' => 'ファッション'],
                ['tld' => 'XN--VERMGENSBERATUNG-PWB'],
            ],
        ], [
            'valid.*.tld' => 'is_tld',
        ]);

        $this->assertFalse($validator->fails());
    }

    /**
     * @test
     */
    public function test_valid_domains_with_ends_with_tld()
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = \Validator::make([
            'valid' => [
                ['tld' => 'google.com'],
                ['tld' => 'gOOgle.CoM'],
                ['tld' => 'кто.рф'],
                ['tld' => 'Deutsche.Vermögensberatung.vermögensberater'],
                ['tld' => 'الاعلى-للاتصالات.قطر'],
            ],
        ], [
            'valid.*.tld' => 'ends_with_tld',
        ]);

        $this->assertFalse($validator->fails());
    }

    /**
     * @test
     */
    public function test_invalid_domains_with_ends_with_tld()
    {
        /** @var \Illuminate\Validation\Validator $validator */
        $validator = \Validator::make([
            'valid' => [
                ['tld' => 'googlecoom'],
                ['tld' => 'gooogle.C.o.M'],
                ['tld' => 'google.Blablbal'],
                ['tld' => 'google.c o m'],
                ['tld' => 'кто.рaф'],
                ['tld' => 'الاعلى-للاتصالات.ققط'],
            ],
        ], [
            'valid.*.tld' => 'is_tld',
        ]);

        $this->assertTrue($validator->fails());
    }
}