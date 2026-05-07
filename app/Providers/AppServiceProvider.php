<?php

namespace App\Providers;

use App\Models\Parcel;
use App\Services\DeliveryService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Bind the facade key (Parcel::class) to the real service
        $this->app->singleton(Parcel::class, function ($app) {
            return new DeliveryService('Denmark', 'by_air');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
