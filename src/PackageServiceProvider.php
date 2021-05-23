<?php

namespace CozyFex\MyPackage;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        # Load View
        $this->loadViewsFrom(__DIR__.'/views', 'my-package');

        # Load Route
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
