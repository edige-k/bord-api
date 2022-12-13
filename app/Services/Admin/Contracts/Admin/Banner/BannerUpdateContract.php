<?php


namespace App\Services\Admin\Contracts\Admin\Banner;


use App\Models\Banner;
use App\Services\Admin\DTO\Banner\BannerDto;

interface BannerUpdateContract
{
    public function execute(Banner $banner,BannerDto $dto ): void;

}