<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrmController;
use App\Http\Controllers\ComputersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí se definen las rutas para el controlador ORM que devuelven datos JSON.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rutas para obtener datos de las tablas usando OrmController
Route::get('/areas', [OrmController::class, 'getAreas']);
Route::get('/teachers', [OrmController::class, 'getTeachers']);
Route::get('/computers', [OrmController::class, 'getComputers']);
Route::get('/courses', [OrmController::class, 'getCourses']);
Route::get('/apprentices', [OrmController::class, 'getApprentices']);

// Rutas CRUD para Computers
Route::resource('computers', ComputersController::class);
