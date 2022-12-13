<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\NewsConfirm\NewsConfirmController;
Route::group(['prefix' => 'news'], function () {
    Route::get('', [NewsConfirmController::class, 'index']);


    Route::group(['prefix' => '{news}'], function () {
        Route::post('confirm', [NewsConfirmController::class, 'confirm']);
        Route::post('notconfirm', [NewsConfirmController::class, 'notconfirm']);
        Route::delete('delete', [NewsConfirmController::class, 'destroy']);
    });
});