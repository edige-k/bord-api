<?php


namespace App\Services\clients\Repositories\MainKitchens;


use App\Models\Kitchen;
use App\Repositories\BaseRepository;

class RestaurantMainKitchensRepository extends BaseRepository implements RestaurantMainKitchensRepositoryInterface
{

    public function __construct(Kitchen $model )
    {
        return $this->model=$model;
    }
}