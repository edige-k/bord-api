<?php


namespace App\Services\clients\Repositories\News;


use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface RestaurantNewsIdRepositoryInterface extends EloquentRepositoryInterface
{
    public function getNewsId(
        string $city,
        string $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection;
}