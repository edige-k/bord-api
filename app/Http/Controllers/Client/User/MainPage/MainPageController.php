<?php

namespace App\Http\Controllers\Client\User\MainPage;

use App\Http\Controllers\Controller;
use App\Services\clients\Contracts\GetAllContract\GetBannerContract;
use App\Services\clients\Contracts\restaurant\RestaurantOpenContract;


class MainPageController extends Controller
{
    public function index(){

       $banners = app(GetBannerContract::class)->execute();
       $openNow=app(RestaurantOpenContract::class)->execute();

       return[
           'banners'=>$banners,
           'restaurant'=>$openNow
       ] ;
    }
}
