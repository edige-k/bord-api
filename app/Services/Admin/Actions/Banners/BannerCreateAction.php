<?php


namespace App\Services\Admin\Actions\Banners;


use App\Models\Banner;
use App\Services\Admin\Contracts\Admin\Banner\BannerCreateContract;
use App\Services\Admin\DTO\Banner\BannerDto;
use App\Services\SubActions\Admin\Banner\BannerUploadMediaAction;
use Illuminate\Support\Facades\DB;

class BannerCreateAction implements BannerCreateContract
{

    public function execute(BannerDto $dto): void
    {
        DB::transaction(function () use( $dto)
        {
           $banner= $this->createBanner($dto);
            $this->uploadMedia($banner,$dto);

        });
    }


    private function createBanner(BannerDto $dto) {
       return  Banner::query()->create($dto->toArray());
    }

    private function uploadMedia($banner,BannerDto $dto):void    {
        app(BannerUploadMediaAction::class)->run(
            $banner, $dto->image,
        );
    }
}