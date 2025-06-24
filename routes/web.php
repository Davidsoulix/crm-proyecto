<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Tarea\Form as TareaForm;
use App\Http\Livewire\Actividad\Form as ActividadForm;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Tareas
    Route::view('/tareas/create', 'tareas.create')->name('tareas.create');
    Route::view('/tareas', 'tareas.index')->name('tareas.index');

    // Actividades
    Route::view('/actividades/create', 'actividades.create')->name('actividades.create');
    Route::view('/actividades', 'actividades.index')->name('actividades.index');

    //Sector
    Route::view('/sector', 'sector.index')->name('sector.index');
    Route::view('/sector/create', 'sector.create')->name('sector.create');
});
