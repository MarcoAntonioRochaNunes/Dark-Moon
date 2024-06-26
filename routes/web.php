<?php

use App\Http\Controllers\GruposController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/product/{id}', [ProdutosController::class, 'index']);
Route::get('/group/{id}', [GruposController::class, 'index']);

