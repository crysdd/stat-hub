<?php

namespace Vendor\StatHub;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;

class StatHubServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Merge default configuration
        $this->mergeConfigFrom(
            __DIR__.'/../config/stat-hub.php', 'stat-hub'
        );

        $this->app->singleton(Client::class, function ($app) {
            return new Client([
                'base_uri' => config('stat-hub.base_uri', 'http://stat.loc'),
            ]);
        });
    }

    public function boot(): void
    {
        // Load routes from the package
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        // Publish config file
        $this->publishes([
            __DIR__.'/../config/stat-hub.php' => config_path('stat-hub.php'),
        ], 'stat-hub-config');
    }
}
