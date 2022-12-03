<?php

namespace DevScripts\EnglishNepaliNumberConverter;

use Illuminate\Support\ServiceProvider;

class EnglishNepaliNumberConverterProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('DevScripts\EnglishNepaliNumberConverter\Convert');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
