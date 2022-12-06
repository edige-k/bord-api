<?php


use App\Http\Controllers\Admin\Auth\LogoutController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'organization'], function () {
    Route::group(['middleware' => ['guest']], function () {
        include('auth/auth.php');
    });
    Route::group(['prefix' => 'user', 'middleware' => ['auth:sanctum', 'role:partner']], function () {
        include('user/profile.php');
        Route::post('logout', [LogoutController::class, 'logout']);
    });
});