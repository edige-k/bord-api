<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Kind\KindController;

Route::group(['prefix' => 'kind'], function () {
    Route::get('', [KindController::class, 'index']);

    Route::post('', [KindController::class, 'store']);

    Route::group(['prefix' => '{kind}'], function () {

        Route::post('', [KindController::class, 'update']);

    });
});