<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Additional\AdditionalController;

Route::group(['prefix' => 'additional'], function () {
    Route::get('', [AdditionalController::class, 'index']);

    Route::post('', [AdditionalController::class, 'store']);

    Route::group(['prefix' => '{additional}'], function () {

        Route::post('', [AdditionalController::class, 'update']);

    });
});
