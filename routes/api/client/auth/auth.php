<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Auth\LoginController;
use App\Http\Controllers\Client\Auth\RegisterController;
Route::group(['prefix'=>'auth'],function() {
    Route::group(['prefix'=>'login'],function() {
        Route::post('', [LoginController::class, 'login']);
    });
    Route::group(['prefix'=>'register'],function() {
        Route::post('', [RegisterController::class, 'register']);
    });
});
