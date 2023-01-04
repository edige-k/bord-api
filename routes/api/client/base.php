<?php

use App\Http\Controllers\Client\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => ''], function(){
    Route::group(['middleware' => ['guest']], function() {
        include('auth/auth.php');
    });

    Route::group(['prefix' => 'client', 'middleware' => ['auth:sanctum', 'role:client']], function()
    {
        include('user/account.php');
        include('user/mainpage.php');
        include('user/restaurant_page.php');
        include('user/news.php');
        Route::post('logout', [LogoutController::class, 'logout']);
    });
});