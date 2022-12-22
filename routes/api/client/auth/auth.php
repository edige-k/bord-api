<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\Auth\RegisterController;
use App\Http\Controllers\Client\Auth\ConfirmController;
Route::group(['prefix'=>'auth'],function() {
    Route::group(['prefix'=>'login'],function() {
        Route::post('', [LoginController::class, 'login']);
    });
    Route::group(['prefix'=>'register'],function() {
        Route::post('', [RegisterController::class, 'register']);
        Route::group(['prefix'=>'{client}'],function() {
            Route::post('confirm', [ConfirmController::class, 'confirm']);
    });
    });

});
