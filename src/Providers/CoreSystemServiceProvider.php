<?php

namespace AdzinPratama\CoreSystem\Providers;

use Illuminate\Support\ServiceProvider;

class CoreSystemServiceProvider extends ServiceProvider
{
    /**
     *  Bootsrap the application services
     *  call when after all packages has been loaded
     * @return void
     *  */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../Views', 'coresystem');
        $this->loadMigrationsFrom(__DIR__ . '/../Database/migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../Lang', 'coresystem');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
    }

    public function register()
    {
        // $this->app->register(RouteServiceProvider::class);
        require __DIR__ . '/../Helpers/Helper.php';

        // $this->app->register(RouteServiceProvider::class);
    }
}
