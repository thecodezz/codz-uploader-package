<?php

namespace Codz\Uploader;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

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

        // Publish the Blade component view
        $this->publishes([
            __DIR__.'/../resources/views/components/uploader.blade.php' => resource_path('views/components/uploader.blade.php'),
        ], 'codz-uploader-components');

        // Allow component use without publishing by loading views from the package
        $this->loadViewsFrom(__DIR__.'/../resources/views/components', 'codz-uploader');

        // Register the component with Laravel's component system
        Blade::component('uploader', \Codz\Uploader\View\Components\Uploader::class);
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
