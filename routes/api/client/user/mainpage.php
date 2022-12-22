<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\User\MainPage\MainPageController;
Route::group(['prefix' => 'main'], function ()
{
    Route::get('',[MainPageController::class,'index']);
//    // Profile
//    Route::group(['prefix' => 'profile'], function () {
//        Route::get('', [ClientProfileController::class, 'index']);
//    });
});