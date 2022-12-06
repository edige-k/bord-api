<?php


namespace App\Services\Admin\Contracts\Admin\City;


use App\Models\City;
use App\Services\Admin\DTO\City\CityCreateDto;

interface CityUpdateContract
{
    public function execute(City $city,CityCreateDto $dto): void;

}