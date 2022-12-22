<?php


namespace App\Repositories\restaurant;


use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface RestaurantRepositoryInterface extends EloquentRepositoryInterface
{

    public function openRestaurant(
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ):Collection;

}