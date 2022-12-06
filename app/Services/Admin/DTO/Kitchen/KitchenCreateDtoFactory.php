<?php


namespace App\Services\Admin\DTO\Kitchen;


use App\Services\Admin\Requests\Admin\Kitchen\KitchenRequest;

class KitchenCreateDtoFactory
{
    public static function fromRequest(KitchenRequest $request) :KitchenCreateDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):KitchenCreateDto
    {
        return new KitchenCreateDto([
            'name' => $data['name'],

        ]);
    }
}