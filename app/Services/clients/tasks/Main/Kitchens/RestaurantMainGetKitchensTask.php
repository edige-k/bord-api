<?php


namespace App\Services\clients\tasks\Main\Kitchens;


use App\Services\clients\Repositories\MainKitchens\RestaurantMainKitchensRepositoryInterface;
use Ramsey\Collection\Collection;

class RestaurantMainGetKitchensTask
{
    private RestaurantMainKitchensRepositoryInterface $repository;

    public function __construct(RestaurantMainKitchensRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function run(
        string $value,
        ?string $key
    ):array
    {
        return $this->repository->getList($value,$key);

    }
}