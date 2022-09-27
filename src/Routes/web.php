<?php

use AdzinPratama\CoreSystem\Controllers\CoreAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])
    ->group(function () {

        Route::get('admin/login', [CoreAuthController::class, 'login'])
            ->name('core-auth-login');
    });
