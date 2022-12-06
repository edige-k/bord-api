<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Organization\Profile\ProfileController;

Route::group(['prefix' => 'profile'], function () {
    Route::get('', [ProfileController::class, 'index']);

    Route::post('', [ProfileController::class, 'store']);
    Route::group(['prefix' => '{organization}'], function () {
    Route::post('', [ProfileController::class, 'update']);

    });
});