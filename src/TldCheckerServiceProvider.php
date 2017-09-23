<?php

namespace Arubacao\TldChecker;

use Validator;
use Illuminate\Support\ServiceProvider;
use Arubacao\TldChecker\Validator as TldValidator;

class TldCheckerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend(
            'is_tld',
            function ($attr, $value, $param, $validator) {
                return TldValidator::isTld($value);
            },
            'The :attribute field is not a valid tld.'
        );

        Validator::extend(
            'ends_with_tld',
            function ($attr, $value, $param, $validator) {
                return TldValidator::endsWithTld($value);
            },
            'The :attribute field does not end with a valid tld.'
        );
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Laravel 5.0 compatibility
    }
}
