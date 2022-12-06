<?php


namespace App\Services\Admin\DTO\City;
use Spatie\DataTransferObject\DataTransferObject;


class CityCreateDto extends DataTransferObject
{
    public string $name;

}