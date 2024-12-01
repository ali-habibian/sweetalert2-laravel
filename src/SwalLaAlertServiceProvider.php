<?php

namespace AliHabibian\Sweetalert2Laravel;

use Illuminate\Support\ServiceProvider;

class SwalLaAlertServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish JS assets
        $this->publishes([
            __DIR__ . '/../assets/js/swalalert.js' => public_path('js/vendor/swalalert.js'),
        ], 'assets');

        // Publish configuration
        $this->publishes([
            __DIR__ . '/../config/swalalert.php' => config_path('swalalert.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/swalalert.php', 'swalalert'
        );
    }
}