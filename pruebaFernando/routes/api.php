<?php

use Illuminate\Support\Facades\Route;

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});


Route::middleware('auth:api')->group(function () {
    Route::apiResource('personas', PersonaController::class);
});

Route::middleware('auth:api')->group(function () {
    Route::apiResource('mascotas', MascotaController::class);
});


Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);

    Route::middleware('auth:api')->group(function () {
        Route::post('logout', [AuthController::class, 'logout']);
        Route::get('me', [AuthController::class, 'me']);
    });
});

Route::middleware('auth:api')->get('/personas/{id}/mascotas', [PersonaController::class, 'mascotasPorPersona']);

