<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\User\ClientProfileController;
Route::group(['prefix' => 'account'], function ()
{
//    // Profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('', [ClientProfileController::class, 'index']);
    });
});