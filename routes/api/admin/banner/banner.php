<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Banners\BannerController;
Route::group(['prefix' => 'banner'], function () {
    Route::get('', [BannerController::class, 'index']);

    Route::post('', [BannerController::class, 'store']);

    Route::group(['prefix' => '{banner}'], function () {
        Route::post('', [BannerController::class, 'update']);
        Route::delete('', [BannerController::class, 'destroy']);
    });
});