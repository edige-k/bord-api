<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\User\RestaurantPage\RestaurantPageController;
Route::group(['prefix' => 'restaurant'], function ()
{
    Route::group(['prefix' => '{restaurant}'], function () {
        Route::get('',[RestaurantPageController::class,'index']);
        Route::post('/comments',[RestaurantPageController::class,'comment']);
    });
});
