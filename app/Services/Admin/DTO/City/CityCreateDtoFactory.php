<?php


namespace App\Services\Admin\DTO\City;
use App\Services\Admin\Requests\Admin\City\CityRequest;


class CityCreateDtoFactory
{

    public static function fromRequest(CityRequest $cityRequest) :CityCreateDto{
        return self::fromArray($cityRequest->validated());
    }
    public static function fromArray(array $data):CityCreateDto
    {
        return new CityCreateDto([
            'name' => $data['name'],
        ]);

    }
}