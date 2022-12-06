<?php

namespace App\Http\Controllers\Admin\User\Kitchen;

use App\Http\Controllers\Controller;
use App\Models\Kitchen;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenCreateContract;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenDeleteContract;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenUpdateContract;
use App\Services\Admin\DTO\Kitchen\KitchenCreateDtoFactory;
use App\Services\Admin\Requests\Admin\Kitchen\KitchenRequest;
use App\Services\Admin\Resources\Kitchen\KitchenResource;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function index(){
        return KitchenResource::collection(Kitchen::all());
    }
    public function store(KitchenRequest $request){
        app(KitchenCreateContract::class)->execute
        (KitchenCreateDtoFactory::fromRequest($request));
        return response()->json("Created Kitchen");
    }
    public function update(Kitchen $kitchen,KitchenRequest $request){
        app(KitchenUpdateContract::class)->execute(
            $kitchen,KitchenCreateDtoFactory::fromRequest($request));
        return response()->json("Updated Kitchen");
    }

    public function destroy(Kitchen $kitchen)
    {
        app(KitchenDeleteContract::class)->execute(
            $kitchen
        );
        return response()->json("Deleted Succesfully");
    }
}
