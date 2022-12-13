<?php


namespace App\Services\Admin\Contracts\Admin\Banner;


use App\Models\Banner;
use App\Services\Admin\DTO\Banner\BannerDto;

interface BannerCreateContract
{
    public function execute(BannerDto $dto ): void;
}