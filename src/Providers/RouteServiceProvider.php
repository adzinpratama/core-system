<?php

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ProvidersRouteServiceProvider
{
    public function boot()
    {
        $this->routes(function () {
            Route::middleware('web')
                ->prefix('web')
                ->group();
        });
    }
}
