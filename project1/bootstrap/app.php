<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
//nueva ruta 

        then: function () {

<<<<<<< HEAD
            Route::middleware('web', 'auth')
=======
            Route::middleware('')
>>>>>>> 6b6f278338a4fe29cc5f2f417838cf9f212b3d5d
                ->prefix('admin')
                ->name('admin.')
                ->group(base_path('routes/admin.php'));
        }

    )
    ->withMiddleware(function (Middleware $middleware): void {
        //
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
