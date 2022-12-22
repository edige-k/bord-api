<?php


namespace App\Services\clients\Action\RestautantOpen;


use App\Repositories\restaurant\RestaurantRepositoryInterface;
use App\Services\clients\Contracts\restaurant\RestaurantOpenContract;

class RestaurantOpenAction implements RestaurantOpenContract
{
    private RestaurantRepositoryInterface $repository;

    public function __construct(RestaurantRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function execute(): array
    {
        $query= $this->repository->openRestaurant(
            ['organizations.id', 'organizations.name'],
            ['kitchens:kitchens.id,name']
        );
        return [$query];

    }

}