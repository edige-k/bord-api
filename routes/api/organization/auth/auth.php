<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController;


Route::group(['prefix'=>'auth'],function() {
    Route::group(['prefix'=>'login'],function() {
        Route::post('', [LoginController::class, 'login']);
});

});