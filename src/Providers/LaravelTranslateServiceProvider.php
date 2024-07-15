<?php

namespace Monosniper\LaravelTranslate\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelTranslateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/kirano_translate.php' => config_path('kirano_translate.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../dist' => public_path('vendor/laravel-translate'),
            ], 'public');
        }

        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }
}
