<?php

use App\Http\Controllers\PayOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ejemplo de Service Provider
Route::get('/pay', [PayOrderController::class, 'store']);
Route::get('/credit', [PayOrderController::class, 'store']);
