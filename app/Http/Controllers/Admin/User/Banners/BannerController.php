<?php

namespace App\Http\Controllers\Admin\User\Banners;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Services\Admin\Contracts\Admin\Banner\BannerCreateContract;
use App\Services\Admin\Contracts\Admin\Banner\BannerDeleteContract;
use App\Services\Admin\Contracts\Admin\Banner\BannerUpdateContract;
use App\Services\Admin\DTO\Banner\BannerDto;
use App\Services\Admin\DTO\Banner\BannerDtoFactory;
use App\Services\Admin\Requests\Admin\Banner\BannerRequest;
use App\Services\Admin\Resources\Banner\BannerResource;
use Illuminate\Http\Request;

class BannerController extends Controller
{

    public function index(){
        return BannerResource::collection(Banner::all());
    }

    public function store(BannerRequest $request){
        app(BannerCreateContract::class)->execute
        (BannerDtoFactory::fromRequest($request));
        return response()->json("Created Banner");
    }
    public function update(Banner $banner,BannerRequest $request){
        app(BannerUpdateContract::class)->execute(
            $banner,BannerDtoFactory::fromRequest($request));
        return response()->json("Updated Banner");
    }
    public function destroy(Banner $banner)
    {
        app(BannerDeleteContract::class)->execute(
            $banner
        );
        return response()->json("Deleted Succesfully");
    }

}
