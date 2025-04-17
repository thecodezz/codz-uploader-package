<?php

namespace Codz\Uploader;

use Illuminate\Support\ServiceProvider;

class CodzUploaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        // Register package assets to be published
        $this->publishes([
            __DIR__.'/../public/scripts.js'  => public_path('vendor/codz-uploader/scripts.js'),
            __DIR__.'/../public/styles.css' => public_path('vendor/codz-uploader/styles.css'),
        ], 'codz-uploader-assets');

        // Publish the Blade view component
        $this->publishes([
            __DIR__.'/../resources/views/components/uploader.blade.php' => resource_path('views/components/uploader.blade.php'),
        ], 'codz-uploader-views');

        // Allow component use without publishing by loading views from the package
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'codz-uploader');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // No services to register currently
    }
}
