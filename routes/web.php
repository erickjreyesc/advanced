<?php

use App\Models\Parcel;
use App\Services\DeliveryService;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ejemplo de Facades
Route::get('parcel', function () {
    $deliveryService = new DeliveryService('Denmark', 'by_air');

    $deliveryService->send(
        'Book',
        'medium',
        'Welcome to Laravel Advance Topics course',
        'joe@example.com'
    );
});

// Ejemplo usando la fachada manual
Route::get('facades', function () {
    return Parcel::send(
        'Book',
        'medium',
        'Welcome to Laravel Advanced Topics course',
        'joe@example.com'
    );
});
