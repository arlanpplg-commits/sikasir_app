<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProdukController;

// 1. ROUTE AUTENTIKASI (Register & Login)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login'])->name('login');

// 2. ROUTE PRODUK



Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('produk', ProdukController::class);
    Route::post('/logout', [AuthController::class, 'logout']);

});