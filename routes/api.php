<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SearchController;

Route::prefix('v1')->name('api.v1')->group(function () {
    Route::post('/search', [SearchController::class, 'index']);
});
