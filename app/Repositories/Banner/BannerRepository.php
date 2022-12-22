<?php


namespace App\Repositories\Banner;


use App\Models\Banner;
use App\Repositories\BaseRepository;

class BannerRepository  implements BannerRepositoryInterface
{
//    public function __construct(Banner $banner)
//    {
//        $this->model = $banner;
//    }
    public function getAllBanners()
    {
        return Banner::all()->sortBy('position');
    }
}