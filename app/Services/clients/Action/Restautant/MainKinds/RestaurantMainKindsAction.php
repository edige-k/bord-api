<?php


namespace App\Services\clients\Action\Restautant\MainKinds;


use App\Services\clients\Contracts\restaurant\Kinds\RestaurantMainKindsContract;
use App\Services\clients\Repositories\MainKinds\RestaurantMainKindsInterface;
use Illuminate\Database\Eloquent\Collection;

class RestaurantMainKindsAction implements RestaurantMainKindsContract
{

    private RestaurantMainKindsInterface $repository;

    public function __construct(RestaurantMainKindsInterface $repository)
    {
        $this->repository = $repository;
    }
    public function execute(string $city): Collection
    {
        $query= $this->repository->Kind($city,  ['organizations.id', 'organizations.name'],
            ['kitchens:kitchens.id,name', 'open_dates:organization_id,week,from,end', 'file:files.id,fileable_id,fileable_type,name,url']
        );
        return $query;
    }
}
