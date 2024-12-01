<?php

namespace AliHabibian\Sweetalert2Laravel;

use Illuminate\Support\ServiceProvider;

class AlertServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Publish configuration
        $this->publishes([
            __DIR__ . '/../config/alert.php' => config_path('alert.php'),
        ], 'config');

        // Publish language files
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/alert'),
        ], 'lang');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'alert');
    }

    public function register()
    {
        // Merge default configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/alert.php', 'alert');
    }
}