<?php

namespace AdzinPratama\CoreSystem\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ProvidersRouteServiceProvider
{
    public function boot()
    {
        dd(core_path('Routes/web.php'));
        $this->routes(function () {
            Route::middleware('web')
                ->prefix('web')
                ->group(core_path('Routes/web.php'));
        });
    }
}
