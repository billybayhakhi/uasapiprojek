<?php
// routes/api.php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ApiKeyController;
use App\Http\Controllers\Api\TourController;
use App\Http\Controllers\Api\DestinationController;
use Illuminate\Support\Facades\Route;

// ── PUBLIC (tidak perlu auth) ─────────────────────────────
Route::prefix('v1')->group(function () {

    // Auth routes
    Route::prefix('auth')->group(function () {
        Route::post('register', [AuthController::class, 'register']);
        Route::post('login',    [AuthController::class, 'login']);
    });

    // Public data (pakai API Key saja)
    Route::middleware('api.key')->group(function () {
        Route::get('destinations', [DestinationController::class, 'index']);
        Route::get('destinations/{id}', [DestinationController::class, 'show']);
        Route::get('tours',        [TourController::class, 'index']);
        Route::get('tours/{id}',   [TourController::class, 'show']);
    });

});

// ── PROTECTED (butuh JWT Bearer Token) ───────────────────
Route::prefix('v1')->middleware('auth:api')->group(function () {

    // Profile & auth
    Route::prefix('auth')->group(function () {
        Route::get('me',      [AuthController::class, 'me']);
        Route::post('logout', [AuthController::class, 'logout']);
        Route::post('refresh',[AuthController::class, 'refresh']);
    });

    // Kelola API key (user yang login)
    Route::prefix('api-keys')->group(function () {
        Route::get('/',       [ApiKeyController::class, 'index']);
        Route::post('/',      [ApiKeyController::class, 'store']);
        Route::delete('/{id}',[ApiKeyController::class, 'destroy']);
    });

});