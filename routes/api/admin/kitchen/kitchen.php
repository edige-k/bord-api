<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Kitchen\KitchenController;

Route::group(['prefix' => 'kitchen'], function () {
    Route::get('', [KitchenController::class, 'index']);

    Route::post('', [KitchenController::class, 'store']);
    Route::group(['prefix' => '{kitchen}'], function () {
        Route::post('', [KitchenController::class, 'update']);
        Route::delete('', [KitchenController::class, 'destroy']);
    });
});