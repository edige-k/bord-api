<?php


namespace App\Repositories\Banner;


use App\Models\Banner;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;


class BannerRepository  implements BannerRepositoryInterface
{
    public function getAllBanners():Collection
    {
        return Banner::query()->with('file:files.id,fileable_id,fileable_type,name,url')->get();
    }
}