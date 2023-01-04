<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\User\RestaurantPage\RestaurantPageController;
Route::group(['prefix' => 'restaurant'], function ()
{
    Route::group(['prefix' => '{organization}'], function () {
        Route::get('',[RestaurantPageController::class,'index']);
        Route::group(['prefix' => 'comments'], function () {
            Route::post('',[RestaurantPageController::class,'store']);
            Route::group(['prefix' => '{comment}'], function () {
        Route::put('',[RestaurantPageController::class,'update']);
        });
        });
    });
});
