<?php


namespace App\Services\Admin\Repositories\City;


use App\Models\City;
use App\Repositories\BaseRepository;

class CityRepository extends BaseRepository implements CityRepositoryInterface
{
    public function __construct(City $city)
    {
        $this->model = $city;
    }
}