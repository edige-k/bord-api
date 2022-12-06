<?php
use App\Http\Controllers\Admin\User\Account\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'account'], function ()
{
    // Profile
    Route::group(['prefix' => 'profile'], function () {
        Route::get('', [ProfileController::class, 'index']);
    });
});