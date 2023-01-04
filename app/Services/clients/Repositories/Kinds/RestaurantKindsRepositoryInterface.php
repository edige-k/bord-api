<?php


namespace App\Services\clients\Repositories\Kinds;


use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface RestaurantKindsRepositoryInterface extends EloquentRepositoryInterface
{
    public function KindId(
        string $city_id,
        string $kind_id,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection;

}