<?php

namespace Providers;

use Illuminate\Support\ServiceProvider;

class LaravelTranslateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/kirano_translate.php' => config_path('kirano_translate.php'),
            ]);
        }

        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }
}
