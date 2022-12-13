<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Organization\News\NewsController;
Route::group(['prefix' => 'news'], function () {
    Route::get('', [NewsController::class, 'index']);

    Route::post('', [NewsController::class, 'store']);
    Route::group(['prefix' => '{news}'], function () {
        Route::post('', [NewsController::class, 'update']);
        Route::delete('', [NewsController::class, 'destroy']);

    });
});
