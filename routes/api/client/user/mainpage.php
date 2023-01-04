<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\User\MainPage\MainPageController;
Route::group(['prefix' => 'main'], function ()
{
    Route::get('',[MainPageController::class,'index']);
    Route::get('/kinds/{kind}',[MainPageController::class,'kinds_id']);
});