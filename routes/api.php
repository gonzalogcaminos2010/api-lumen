<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\v1\ProductoController as ProductoVersion1;
use App\Http\Controllers\Api\v2\ProductoController as ProductoVersion2;

Route::apiResource('v1/productos', ProductoVersion1::class)
    ->only(['index','show', 'destroy'])
    ->middleware('auth:sanctum');


    Route::apiResource('v2/productos', ProductoVersion2::class)
    ->only(['index','show', 'destroy', 'store'])
    ->middleware('auth:sanctum');
    

Route::post('login', 
    [App\Http\Controllers\Api\LoginController::class, 'login']) ->name('login');