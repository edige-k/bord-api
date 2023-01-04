<?php


namespace App\Services\clients\tasks\Main\Kinds;


use App\Models\Kind;
use App\Services\clients\Repositories\Kinds\RestaurantKindsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class RestaurantMainGetKindIdTask
{
    private RestaurantKindsRepositoryInterface $repository;
    public function __construct(RestaurantKindsRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function run(string $city,string $kind_id): Collection
    {
        $query= $this->repository->KindId($city,$kind_id,  ['organizations.id', 'organizations.name'],
            ['kitchens:kitchens.id,name', 'open_dates:organization_id,week,from,end', 'file:files.id,fileable_id,fileable_type,name,url']
        );
        return $query;
    }
}