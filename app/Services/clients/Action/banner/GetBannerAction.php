<?php


namespace App\Services\clients\Action\banner;


use App\Repositories\Banner\BannerRepositoryInterface;
use App\Services\clients\Contracts\Banner\GetBannerContract;
use Illuminate\Database\Eloquent\Collection;


class GetBannerAction implements GetBannerContract
{
    private BannerRepositoryInterface $repository;

    public function __construct(BannerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function execute():Collection
    {
        return $this->repository->getAllBanners();
    }

}