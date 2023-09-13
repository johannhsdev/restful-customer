<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\V1\CustomerController;

Route::post('auth/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('auth/logout', [AuthController::class, 'logout']);

    Route::apiResource('v1/customers', CustomerController::class)
    ->only(['index', 'store', 'show', 'destroy']);
});
