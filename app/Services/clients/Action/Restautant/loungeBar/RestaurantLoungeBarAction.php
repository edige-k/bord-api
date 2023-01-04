<?php


namespace App\Services\clients\Action\Restautant\loungeBar;

use App\Models\Kind;
use App\Repositories\restaurant\RestaurantRepositoryInterface;
use App\Services\clients\Contracts\restaurant\LoungeBar\RestaurantLoungeBarContract;
use App\Services\clients\Repositories\Kinds\RestaurantKindsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
class RestaurantLoungeBarAction implements RestaurantLoungeBarContract
{
    private RestaurantKindsRepositoryInterface $repository;

    public function __construct(RestaurantKindsRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function execute(string $city,Kind $kind): Collection
    {
        $query= $this->repository->KindId($city,$kind->id,  ['organizations.id', 'organizations.name'],
            ['kitchens:kitchens.id,name', 'open_dates:organization_id,week,from,end', 'file:files.id,fileable_id,fileable_type,name,url']
        );

        return $query;
    }
}