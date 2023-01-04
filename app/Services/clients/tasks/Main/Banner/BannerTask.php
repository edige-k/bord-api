<?php


namespace App\Services\clients\tasks\Main\Banner;


use App\Repositories\Banner\BannerRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class BannerTask
{
    private BannerRepositoryInterface $repository;

    public function __construct(BannerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function run():Collection
    {
        return $this->repository->getAllBanners();
    }
}