<?php

use App\Http\Controllers\PayOrderController;
use App\Services\DeliveryService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ejemplo de Service Provider
Route::get('/pay', [PayOrderController::class, 'store']);
Route::get('/credit', [PayOrderController::class, 'store']);

// Ejemplo de Facades
Route::get('parcel', function (){
    $deliveryService = new DeliveryService('Denmark', 'by_air');

    $deliveryService->send(
        'Book',
        'medium',
        'Welcome to Laravel Advance Topics course',
        'joe@example.com'
    );
});
