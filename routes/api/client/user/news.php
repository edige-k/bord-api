<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\User\News\ClientNewsPageController;
Route::group(['prefix' => 'news'], function ()
{
    Route::get('',[ClientNewsPageController::class,'index']);
    Route::group(['prefix' => '{news}'], function ()
    {
        Route::get('',[ClientNewsPageController::class,'show']);

    });
});