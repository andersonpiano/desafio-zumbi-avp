<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecursosController;

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

Route::get('recursos/inserir', [RecursosController::class, 'inserir'])->name('recursos.inserir');
Route::get('recursos/{id}', [RecursosController::class, 'ver'])->name('recursos.ver');
Route::get('recursos/{recurso}/edit', [RecursosController::class, 'edit'])->name('recursos.edit');
Route::put('recursos/{recurso}', [RecursosController::class, 'editar'])->name('recursos.editar');
Route::get('recursos/{recurso}/delete', [recursosController::class, 'modal'])->name('recursos.modal');
Route::delete('recursos/{recurso}', [recursosController::class, 'delete'])->name('recursos.delete');
Route::get('recursos', [RecursosController::class, 'index'])->name('recursos');
Route::post('recursos', [RecursosController::class, 'insert'])->name('recursos.inserir_tabela');

