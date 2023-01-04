<?php


namespace App\Services\clients\tasks\News;


use App\Services\clients\Repositories\News\RestaurantNewsIdRepositoryInterface;
use App\Services\clients\Repositories\News\RestaurantNewsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class RestaurantGetIdNewsTask
{
    private RestaurantNewsIdRepositoryInterface $repository;
    public function __construct(RestaurantNewsIdRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function run(string $city,string $newsId): Collection
    {
        $query= $this->repository->getNewsId($city,$newsId,  ['organizations.id', 'organizations.name'],
            ['kitchens:kitchens.id,name', 'open_dates:organization_id,week,from,end', 'news','file:files.id,fileable_id,fileable_type,name,url']
        );
        return $query;
    }
}