<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\User\Partner\PartnerController;
use App\Http\Controllers\Admin\User\Partner\PartnerStatusController;
Route::group(['prefix' => 'partner'], function ()
{
        Route::post('/create', [PartnerController::class, 'store']);
        Route::get('', [PartnerController::class, 'index']);

    Route::group(['prefix' => '{user}'], function () {
        Route::get('', [PartnerController::class, 'show']);
        Route::post('', [PartnerController::class, 'update']);
        Route::post('/activate', [PartnerStatusController::class, 'activate']);
        Route::post('/block', [PartnerStatusController::class, 'block']);
        Route::post('/null', [PartnerStatusController::class, 'null']);
    });
});