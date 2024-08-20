<?php

namespace Monosniper\LaravelTranslate\Providers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelTranslateServiceProvider extends PackageServiceProvider
{
//    public function boot()
//    {
//        if ($this->app->runningInConsole()) {
//            $this->publishes([
//                __DIR__ . '/../../config/kirano_translate.php' => config_path('kirano_translate.php'),
//            ], 'config');
//
//            $this->publishes([
//                __DIR__.'/../../dist' => public_path('vendor/laravel-translate'),
//            ], 'laravel-assets');
//        }
//
//        Livewire::component(app(ComponentRegistry::class)->getName(Translate::class), Translate::class);
////        Livewire::component('monosniper.laravel-translate.livewire.translate', Translate::class);
//
//        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-translate');
//        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
//    }

    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-translate')
            ->hasConfigFile()
            ->hasViews()
            ->hasAssets()
            ->hasRoute('web');
    }
}
