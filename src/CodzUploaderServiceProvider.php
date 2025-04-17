<?php

namespace Codz\Uploader;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class CodzUploaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../public/scripts.js'  => public_path('vendor/codz-uploader/scripts.js'),
            __DIR__.'/../public/styles.css' => public_path('vendor/codz-uploader/styles.css'),
            __DIR__.'/../resources/views/components/uploader.blade.php' => resource_path('views/components/codz-uploader.blade.php'),
        ], 'codz-uploader');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'codz-uploader');
        Blade::component('codz-uploader::components.uploader', 'codz-uploader');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // No services to register currently
    }
}
