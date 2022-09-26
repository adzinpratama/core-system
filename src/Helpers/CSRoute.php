<?php

namespace AdzinPratama\CoreSystem\Helpers;

use Illuminate\Support\Facades\Route;

class CSRoute
{
    protected static $namespace = '\adzinpratama\CoreSystem\controllers';
    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public static function boot()
    {
        // $this->configureRateLimiting();
        // dd(__DIR__ . '../');
        Route::middleware('api')
            ->prefix('api')
            ->group(__DIR__ . '../routes/api.php');

        Route::middleware('web')
            ->group(__DIR__ . '../routes/web.php');
    }
}
