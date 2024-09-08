<?php

namespace Laraphant\Contactform;

use Illuminate\Support\ServiceProvider;

// require 'vendor/autoload.php';

class ContactFromServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // dd(123);

        $this->publishes([
            __DIR__.'/../config/config.php'=>config_path('contactform.php')
        ],'contactform-config');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views','contactform');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

    }
}
