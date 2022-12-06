<?php

namespace App\Http\Controllers\Admin\User\City;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Services\Admin\Contracts\Admin\City\CityUpdateContract;
use App\Services\Admin\Requests\Admin\City\CityRequest;
use App\Services\Admin\DTO\City\CityCreateDtoFactory;
use App\Services\Admin\Contracts\Admin\City\CityContract;
use App\Services\Admin\Resources\City\CityResource;

class CityController extends Controller
{

    public function index(){
        return CityResource::collection(City::all());
    }
        public function store(CityRequest $request){
            app(CityContract::class)->execute
            (CityCreateDtoFactory::fromRequest($request));
            return response()->json("Created City");
        }

    public function update(City $city,CityRequest $request){
        app(CityUpdateContract::class)->execute(
            $city,CityCreateDtoFactory::fromRequest($request));
        return response()->json("Updated City");
    }


}
