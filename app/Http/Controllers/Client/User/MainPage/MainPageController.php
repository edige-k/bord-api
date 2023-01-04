<?php

namespace App\Http\Controllers\Client\User\MainPage;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use App\Services\clients\Contracts\restaurant\LoungeBar\RestaurantLoungeBarContract;
use App\Services\clients\Contracts\restaurant\Main\RestaurantMainGetContract;
use Illuminate\Http\Request;


class MainPageController extends Controller
{
    public function index(Request $request){
        $city_id = $request->header('city');
        return app(RestaurantMainGetContract::class)->execute($city_id);
    }

//    public function kinds_id(Request $request,Kind $kind){
//        $city_id = $request->header('city');
//        $kinds=app(RestaurantLoungeBarContract::class)->execute($city_id,$kind);
//        return [
//           $kind->name=>$kinds,
//        ];
//    }


}
