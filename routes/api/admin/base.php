<?php

use App\Http\Controllers\Admin\Auth\LogoutController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['guest']], function() {
        include('auth/auth.php');
    });

    Route::group(['prefix' => 'user', 'middleware' => ['auth:sanctum', 'role:super_admin|developer']], function()
    {
        include('user/account.php');
        include('user/partner.php');
        include('city/city.php');
        include('kitchen/kitchen.php');
        include('kind/kind.php');
        include('additional/additional.php');

        Route::post('logout', [LogoutController::class, 'logout']);
    });
});