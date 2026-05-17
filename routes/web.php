<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

Route::get('/', function () {
    return view('index');
});

Route::get('/destinations', [DestinationController::class, 'index']);

Route::get('/tours', function () {
    return view('touring');
});