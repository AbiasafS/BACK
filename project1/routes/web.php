<?php

use Illuminate\Support\Facades\Route;
// 1. Importa los controladores que vamos a usar
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Ruta pública principal
Route::get('/', function () {
    return view('welcome');
});

// Rutas de Jetstream (Login, Registro, etc.)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Esta es la ruta 'dashboard' normal de Jetstream
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// --- 2. GRUPO DE RUTAS DE ADMINISTRACIÓN ---
// Este grupo manejará todo lo que esté bajo /admin
Route::prefix('admin')->name('admin.')->middleware([
    'auth:sanctum', // Asegura que solo usuarios autenticados entren
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Ruta para el Dashboard de Admin
    // Esto crea la ruta con el nombre 'admin.dashboard'
    Route::get('/dashboard', function () {
        return view('admin.dashboard'); // Apunta a la vista en resources/views/admin/dashboard.blade.php
    })->name('dashboard');

    // Rutas para Roles (index, create, store, edit, update, destroy)
    // Esto crea la ruta 'admin.roles.index'
    Route::resource('roles', RoleController::class)->names('roles');

    // Rutas para Usuarios
    // Esto crea la ruta 'admin.users.index'
    // ¡Asegúrate de que el controlador UserController exista!
    Route::resource('users', UserController::class)->names('users');

});