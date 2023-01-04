<?php


namespace App\Services\clients\tasks\Main\Kinds;


use App\Services\clients\Repositories\MainKinds\RestaurantMainKindsInterface;
use Illuminate\Database\Eloquent\Collection;

class RestaurantMainGetKindsRestaurantTask
{
    private RestaurantMainKindsInterface $repository;

    public function __construct(RestaurantMainKindsInterface $repository)
    {
        $this->repository = $repository;
    }
    public function run():array
    {
        return $this->repository->getKindList('name','id');

    }
}