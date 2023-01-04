<?php


namespace App\Services\clients\Contracts\Banner;



use Illuminate\Database\Eloquent\Collection;

interface GetBannerContract
{
    public function execute():Collection;
}