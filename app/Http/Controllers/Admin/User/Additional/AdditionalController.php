<?php

namespace App\Http\Controllers\Admin\User\Additional;

use App\Http\Controllers\Controller;
use App\Models\Additional;
use App\Services\Admin\Contracts\Admin\Additional\AdditionalCreateContract;
use App\Services\Admin\Contracts\Admin\Additional\AdditionalUpdateContract;
use App\Services\Admin\DTO\Additional\AdditionalCreateDtoFactory;
use App\Services\Admin\Requests\Admin\Additional\AdditionalRequest;
use App\Services\Admin\Resources\Additional\AdditionalResource;

class AdditionalController extends Controller
{
    public function index(){
        return AdditionalResource::collection(Additional::all());
    }

    public function store(AdditionalRequest $request){
        app(AdditionalCreateContract::class)->execute
        (AdditionalCreateDtoFactory::fromRequest($request));
        return response()->json("Created Additional");
    }
    public function update(Additional $additional,AdditionalRequest $request){
        app(AdditionalUpdateContract::class)->execute(
            $additional,AdditionalCreateDtoFactory::fromRequest($request));
        return response()->json("Updated Additional");
    }
}
