<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{id}', [ProdutosController::class, 'index'])->name('mostrar.produto');
// Route::post('/product/{id}', [ProdutosController::class, 'produto']);

