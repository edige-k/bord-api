<?php


namespace App\Services\Admin\DTO\Kind;


use App\Services\Admin\Requests\Admin\Kind\KindRequest;

class KindCreateDtoFactory
{
    public static function fromRequest(KindRequest $request) :KindCreateDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):KindCreateDto
    {
        return new KindCreateDto([
            'name' => $data['name'],
        ]);

    }
}