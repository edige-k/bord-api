<?php


namespace App\Services\clients\Repositories\News;


use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface RestaurantNewsRepositoryInterface extends EloquentRepositoryInterface
{
    public function getAllNews(
        string $city,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection;


}