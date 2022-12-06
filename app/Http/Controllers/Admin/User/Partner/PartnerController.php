<?php

namespace App\Http\Controllers\Admin\User\Partner;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\Contracts\Admin\Partner\createPartnerContract;
use App\Services\Admin\Contracts\Admin\Partner\updatePartnerContract;
use App\Services\Admin\DTO\Partner\PartnerCreateDtoFactory;
use App\Services\Admin\DTO\Partner\PartnerUpdateDtoFactory;
use App\Services\Admin\Requests\Admin\Partner\PartnerStoreRequest;
use App\Services\Admin\Requests\Admin\Partner\PartnerUpdateRequest;
use App\Services\Admin\Resources\User\ProfileResource;
use Illuminate\Support\Facades\Request;


class PartnerController extends Controller
{
    public function index(){
        $users = User::whereNotIn('name', ['admin','разработчик'])->get();
        return ProfileResource::collection(($users));
    }

    public function store(PartnerStoreRequest $partnerStoreRequest){
            app(createPartnerContract::class)->execute
            (PartnerCreateDtoFactory::fromRequest($partnerStoreRequest));
        return response()->json("Created Organization");
    }

    public function show($id){
        return new ProfileResource(User::findOrFail($id));
    }

    public function update(User $user,PartnerUpdateRequest $partnerUpdateRequest){
        app(updatePartnerContract::class)->execute(
            $user,PartnerUpdateDtoFactory::fromRequest($partnerUpdateRequest));
        return response()->json("Updated Organization");
    }
}
