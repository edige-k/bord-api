<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\User\City\CityController;

    Route::group(['prefix' => 'city'], function () {
        Route::get('', [CityController::class, 'index']);

        Route::post('', [CityController::class, 'store']);

        Route::group(['prefix' => '{city}'], function () {
            Route::post('', [CityController::class, 'update']);

        });
    });
