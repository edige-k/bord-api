<?php

namespace App\Http\Controllers\Client\User\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Services\clients\Contracts\restaurant\News\RestaurantNewsContract;
use App\Services\clients\Contracts\restaurant\News\RestaurantNewsIdContract;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class ClientNewsPageController extends Controller
{
    public function index(Request $request){
        $city_id = $request->header('city');
        return app(RestaurantNewsContract::class)->execute($city_id);
    }
    public function show(Request $request,News $news){

        $city = $request->header('city');
        $newsId=$news->id;
//       dd($id);
        return app(RestaurantNewsIdContract::class)->execute($city,$newsId);

    }
}
