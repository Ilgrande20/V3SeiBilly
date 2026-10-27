<?php

use App\Modules\Conti\Http\Controllers\ContiController;
use Illuminate\Support\Facades\Route;

Route::prefix('conti')->name('conti.')->group(function () {
    Route::get('/', [ContiController::class, 'index'])->name('index');
});