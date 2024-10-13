<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ProfesionController;


Route::get('/', function () {

    // return view('welcome'); 
    return view('inicio'); 
});


// Agregamos las rutas para navegar
// Route::resource('agenda', AgendaController::class);
// Route::resource('profesion', ProfesionController::class);	


//? RUTAS PARA EL USO DE FETCH 
Route::get('/agenda', [AgendaController::class, 'index']);
Route::get('/profesion', [ProfesionController::class, 'index']);  



Route::get('/agenda/create', [AgendaController::class, 'create']);
Route::get('/agenda/{agenda}/edit', [AgendaController::class, 'edit']);

// Rutas para los métodos CRUD
Route::resource('agenda', AgendaController::class)->except(['index', 'create', 'edit']);