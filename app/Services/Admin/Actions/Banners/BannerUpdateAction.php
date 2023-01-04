<?php


namespace App\Services\Admin\Actions\Banners;


use App\Models\Banner;
use App\Services\Admin\Contracts\Admin\Banner\BannerUpdateContract;
use App\Services\Admin\DTO\Banner\BannerDto;
use App\Services\SubActions\Admin\Banner\BannerUploadMediaAction;
use Illuminate\Support\Facades\DB;

class BannerUpdateAction implements BannerUpdateContract
{
    public function execute(Banner $banner,BannerDto $dto): void
    {
        DB::transaction(function () use($banner, $dto)
        {
            $this->UpdateBanner($banner,$dto);
            $this->uploadMedia($banner,$dto);

        });
    }


    private function UpdateBanner(Banner $banner,BannerDto $dto) {
        return $banner->query()->update($dto->toArray());
    }

    private function uploadMedia($banner,BannerDto $dto):void    {
        app(BannerUploadMediaAction::class)->run(
            $banner, $dto->image,
        );
    }
}