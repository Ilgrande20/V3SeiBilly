<?php

namespace App\Modules\Conti\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class ContiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Registra le rotte del modulo Conti
        Route::middleware('web')
            ->namespace('App\Modules\Conti\Http\Controllers')
            ->group(base_path('app/Modules/Conti/routes/web.php'));
    }
}