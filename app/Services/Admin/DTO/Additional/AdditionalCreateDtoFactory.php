<?php


namespace App\Services\Admin\DTO\Additional;


use App\Services\Admin\Requests\Admin\Additional\AdditionalRequest;

class AdditionalCreateDtoFactory
{
    public static function fromRequest(AdditionalRequest $request) :AdditionalCreateDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):AdditionalCreateDto
    {
        return new AdditionalCreateDto([
            'name' => $data['name'],
        ]);

    }
}