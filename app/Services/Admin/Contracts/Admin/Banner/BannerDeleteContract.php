<?php


namespace App\Services\Admin\Contracts\Admin\Banner;


use App\Models\Banner;

interface BannerDeleteContract
{
    public function execute(Banner $banner): bool;


}