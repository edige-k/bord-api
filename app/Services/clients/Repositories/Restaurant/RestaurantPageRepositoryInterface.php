<?php


namespace App\Services\clients\Repositories\Restaurant;


use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface RestaurantPageRepositoryInterface extends EloquentRepositoryInterface
{
    public function findRes(
        string $modelId,
        array $relations = [],
        array $relations_count = [],

    ): ?Model;
}