<?php


namespace App\Services\Admin\Actions\Banners;


use App\Models\Banner;
use App\Services\Admin\Contracts\Admin\Banner\BannerDeleteContract;

class BannerDeleteAction implements BannerDeleteContract
{

    public function execute(Banner $banner): bool
    {
        return $banner->delete();
    }

}