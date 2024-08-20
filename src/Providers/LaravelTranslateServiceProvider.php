<?php

namespace Monosniper\LaravelTranslate\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Monosniper\LaravelTranslate\Livewire\Translate;

class LaravelTranslateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/kirano_translate.php' => config_path('kirano_translate.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../../dist' => public_path('vendor/laravel-translate'),
            ], 'laravel-assets');
        }

        Livewire::component('monosniper.laravel-translate.livewire.translate', Translate::class);

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-translate');
        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }
}
