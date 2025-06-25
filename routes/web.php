<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Proyecto\Detalle;
use App\Livewire\Tarea\Form as TareaForm;
use App\Livewire\Actividad\Form as ActividadForm;
use App\Livewire\Usuario\AsignarProyecto;
use App\Models\User;



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

    //Estado
    Route::view('/estado', 'estado.index')->name('estado.index');
    Route::view('/estado/create', 'estado.create')->name('estado.create');

    //Tipo cliente
    Route::view('/tipo-cliente', 'tipo_cliente.index')->name('tipo-cliente.index');
    Route::view('/tipo-cliente/create', 'tipo_cliente.create')->name('tipo-cliente.create');

    //Herramienta
    Route::view('/herramienta', 'herramienta.index')->name('herramienta.index');
    Route::view('/herramienta/create', 'herramienta.create')->name('herramienta.create');

    //Cliente
    Route::view('/cliente', 'cliente.index')->name('cliente.index');
    Route::view('/cliente/create', 'cliente.create')->name('cliente.create');

    //Solicitud
    Route::view('/solicitud', 'solicitud.index')->name('solicitud.index');
    Route::view('/solicitud/create', 'solicitud.create')->name('solicitud.create');

    //Proyecto
    Route::view('/proyecto', 'proyecto.index')->name('proyecto.index');
    Route::view('/proyecto/create', 'proyecto.create')->name('proyecto.create');
    Route::get('/proyecto/{id}', function ($id) {
        return view('proyecto.show', ['id' => $id]);
    })->name('proyecto.show');

    //Usuarios
    Route::view('/usuarios', 'usuario.index')->name('usuario.index');
    Route::view('/usuarios/create', 'usuario.create')->name('usuario.create');
    //Route::get('/usuarios/proyectos/{id}', \App\Livewire\Usuario\AsignarProyecto::class)->name('usuario.proyectos');
    Route::get('/usuarios/{usuario}/herramientas', function (\App\Models\User $usuario) {
    return view('usuario.herramientas', compact('usuario'));
    })->name('usuario.herramientas');
   Route::get('/usuarios/{usuario}/proyectos', function (User $usuario) {
    return view('usuario.proyectos', compact('usuario'));
})->name('usuario.proyectos');
});
