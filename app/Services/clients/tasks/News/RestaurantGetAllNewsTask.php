<?php


namespace App\Services\clients\tasks\News;


use App\Services\clients\Repositories\News\RestaurantNewsRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class RestaurantGetAllNewsTask
{
    private RestaurantNewsRepositoryInterface $repository;
    public function __construct(RestaurantNewsRepositoryInterface $repository)
    {
        $this->repository=$repository;
    }
    public function run($city):Collection{
        return $this->repository->getAllNews($city,['id','title','content','starts_at','ends_at','newsable_id', 'newsable_type'],['newsable:id,name']);
    }
}