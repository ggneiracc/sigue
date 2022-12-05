<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

////////////// BIENVENIDA //////////////////////////////////////////////
Route::get('/', [PagesController::class, 'fnIndex'])->name('xIndex');

////////////// LECTURA - DETALLE ///////////////////////////////////////
//Route::get('/galeria/{numero?}', [PagesController::class, 'fnGaleria'])->where('numero', '[0-9]+')->name('xGaleria');
//Route::get('/lista', [PagesController::class, 'fnLista'])->name('xLista');
//Route::get('/detalle/{id}', [PagesController::class, 'fnEstDetalle'])->name('Estudiante.xDetalle');

////////////// REGISTRAR - ACTUALIZAR - ELIMINAR ///////////////////////
//Route::post('/', [PagesController::class, 'fnRegistrar'])->name('Estudiante.xRegistrar');
//Route::->get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])->name('Estudiante.xActualizar');
//Route::->put('/actualizar/{id}', [PagesController::class, 'fnUpdate'])->name('Estudiante.xUpdate');
//Route::delete('/eliminar/{id}', [PagesController::class, 'fnEliminar'])->name('Estudiante.xEliminar');


////////////// LECTURA - DETALLE ///////////////////////////////////////
Route::middleware(['auth:sanctum', 'verified'])->get('/galeria/{numero?}', [PagesController::class, 'fnGaleria'])->where('numero', '[0-9]+')->name('xGaleria');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [PagesController::class, 'fnLista'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/detalle/{id}', [PagesController::class, 'fnEstDetalle'])->name('Estudiante.xDetalle');

////////////// REGISTRAR - ACTUALIZAR - ELIMINAR ///////////////////////
Route::middleware(['auth:sanctum', 'verified'])->post('/', [PagesController::class, 'fnRegistrar'])->name('Estudiante.xRegistrar');
Route::middleware(['auth:sanctum', 'verified'])->get('/actualizar/{id}', [PagesController::class, 'fnEstActualizar'])->name('Estudiante.xActualizar');
Route::middleware(['auth:sanctum', 'verified'])->put('/actualizar/{id}', [PagesController::class, 'fnUpdate'])->name('Estudiante.xUpdate');
Route::middleware(['auth:sanctum', 'verified'])->delete('/eliminar/{id}', [PagesController::class, 'fnEliminar'])->name('Estudiante.xEliminar');