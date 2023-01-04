<?php


namespace App\Services\clients\tasks\Main\PopularRestaurant;


use App\Repositories\restaurant\RestaurantRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class RestaurantMainGetPopularRestaurantTask
{
    private RestaurantRepositoryInterface $repository;

    public function __construct(RestaurantRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function run(string $city_id): Collection
    {
        $query= $this->repository->PopularRestaurant($city_id,
            ['organizations.id', 'organizations.name'],
            ['kitchens:kitchens.id,name', 'open_dates:organization_id,week,from,end','file:files.id,fileable_id,fileable_type,name,url']
        );
        return $query;
    }
}