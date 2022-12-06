<?php


namespace App\Services\Admin\Contracts\Admin\City;
use App\Services\Admin\DTO\City\CityCreateDto;

interface CityContract
{
    public function execute(CityCreateDto $dto ): void;

}