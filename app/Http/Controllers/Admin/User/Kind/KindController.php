<?php

namespace App\Http\Controllers\Admin\User\Kind;

use App\Http\Controllers\Controller;
use App\Models\Kind;
use App\Services\Admin\Actions\Kind\KindCreateAction;
use App\Services\Admin\Contracts\Admin\Kind\KindUpdateContract;
use App\Services\Admin\DTO\Kind\KindCreateDtoFactory;
use App\Services\Admin\Requests\Admin\Kind\KindRequest;
use App\Services\Admin\Resources\Kind\KindResource;

class KindController extends Controller
{
    public function index(){
        return KindResource::collection(Kind::all());
    }
    public function store(KindRequest $request){
        app(KindCreateAction::class)->execute
        (KindCreateDtoFactory::fromRequest($request));
        return response()->json("Created Kind");
    }
    public function update(Kind $kind,KindRequest $request){
        app(KindUpdateContract::class)->execute(
            $kind,KindCreateDtoFactory::fromRequest($request));
        return response()->json("Updated kind");
    }
}
