<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FacultadesController;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudiantesController;
use App\Http\Controllers\MateriasController;
use Illuminate\Support\Facades\Route;



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

Route::get('/dashboard', [HomeController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('dashboard');

//rutas para las facultades
Route::get('/facultades/listado', [FacultadesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_facultades');

//rutas para los programas
Route::get('/programas/listado', [ProgramasController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_programas');

//rutas para los docentes
Route::get('/docentes/listado', [DocentesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_docentes');

//rutas para los estudiantes
Route::get('/estudiantes/listado', [EstudiantesController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_estudiantes');

//rutas para las materias
Route::get('/materias/listado', [MateriasController::class, 'index'] 
)->middleware(['auth', 'verified'])->name('listado_materias');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
