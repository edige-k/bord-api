<?php


namespace App\Services\clients\Action\getAllAction;


use App\Repositories\Banner\BannerRepositoryInterface;
use App\Services\clients\Contracts\GetAllContract\GetBannerContract;
use Illuminate\Http\JsonResponse;


class GetBannerAction implements GetBannerContract
{
    private BannerRepositoryInterface $repository;

    public function __construct(BannerRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function execute():array
    {
        return [
           $this->repository->getAllBanners()
        ];
    }

}