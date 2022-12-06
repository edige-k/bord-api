<?php

namespace App\Http\Controllers\Organization\Profile;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Models\User;
use App\Services\Organization\Contracts\Profile\ProfileCreateContract;
use App\Services\Organization\Contracts\Profile\ProfileUpdateContract;
use App\Services\Organization\DTO\Profile\ProfileCreateDtoFactory;
use App\Services\Organization\DTO\Profile\ProfileUpdateDtoFactory;
use App\Services\Organization\Requests\Profile\ProfileCreateRequest;
use App\Services\Organization\Requests\Profile\ProfileUpdateRequest;
use App\Services\Organization\Resources\Profile\ProfileResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        /** @var User $partner */
        $partner = Auth::user();
        return new ProfileResource($partner->organization);
    }

    public function store(ProfileCreateRequest $request){
        app(ProfileCreateContract::class)->execute
        (ProfileCreateDtoFactory::fromRequest($request));
        return response()->json("Created Organization");
    }

    public function update(Organization $organization,ProfileUpdateRequest $request){
        app(ProfileUpdateContract::class)->execute(
            $organization,ProfileUpdateDtoFactory::fromRequest($request));
        return response()->json("Updated Organization");
    }

}
