<?php

namespace ParallaxTechnologies\SubscriptionPackage;

use Illuminate\Support\ServiceProvider;

class SubscriptionServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('parallax.subscription.php'),
        ]);
    }

    public function register()
    {

    }
}
