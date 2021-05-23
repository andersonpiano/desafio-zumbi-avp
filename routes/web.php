<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecursosController;
use App\Http\Controllers\EstoqueController;

Route::get('/', [RecursosController::class, 'index'])->name('inicio');
/* Rotas de Recursos */
Route::get('recursos/inserir', [RecursosController::class, 'inserir'])->name('recursos.inserir');
Route::post('recursos', [RecursosController::class, 'insert'])->name('recursos.inserir_tabela');
Route::get('recursos/{id}', [RecursosController::class, 'ver'])->name('recursos.ver');
Route::get('recursos/{recurso}/edit', [RecursosController::class, 'edit'])->name('recursos.edit');
Route::put('recursos/{recurso}', [RecursosController::class, 'editar'])->name('recursos.editar');
Route::get('recursos/{recurso}/delete', [recursosController::class, 'modal'])->name('recursos.modal');
Route::delete('recursos/{recurso}', [recursosController::class, 'delete'])->name('recursos.delete');
Route::get('recursos', [RecursosController::class, 'index'])->name('recursos');

/* Rotas de Estoque */
Route::get('estoque/inserir', [EstoqueController::class, 'inserir'])->name('estoque.inserir');
Route::post('estoque', [EstoqueController::class, 'insert'])->name('estoque.inserir_tabela');
Route::get('estoque/{id}', [EstoqueController::class, 'ver'])->name('estoque.ver');
Route::get('estoque/{registro}/edit', [EstoqueController::class, 'edit'])->name('estoque.edit');
Route::put('estoque/{registro}', [EstoqueController::class, 'editar'])->name('estoque.editar');
Route::get('estoque/{registro}/delete', [EstoqueController::class, 'modal'])->name('estoque.modal');
Route::delete('estoque/{registro}', [EstoqueController::class, 'delete'])->name('estoque.delete');
Route::get('estoque', [EstoqueController::class, 'index'])->name('estoque');



