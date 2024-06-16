<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

Route::middleware('api')->prefix('produtos')->group(function () {
    Route::post('/', [ProdutoController::class, 'store']);
    Route::get('/', [ProdutoController::class, 'index']);
    Route::get('/{id}', [ProdutoController::class, 'show']);
    Route::put('/{id}', [ProdutoController::class, 'update']);
    Route::delete('/{id}', [ProdutoController::class, 'destroy']);
});

Route::middleware('api')->prefix('categorias')->group(function () {
    Route::post('/', [CategoriaController::class, 'store']);
    Route::get('/', [CategoriaController::class, 'index']);
    Route::get('/{id}', [CategoriaController::class, 'show']);
    Route::put('/{id}', [CategoriaController::class, 'update']);
    Route::delete('/{id}', [CategoriaController::class, 'destroy']);
});


Route::get('/', function () {
    return view('welcome');
});
