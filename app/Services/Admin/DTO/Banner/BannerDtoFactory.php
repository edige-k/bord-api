<?php


namespace App\Services\Admin\DTO\Banner;


use App\Services\Admin\Requests\Admin\Banner\BannerRequest;

class BannerDtoFactory
{
    public static function fromRequest(BannerRequest $request) :BannerDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):BannerDto
    {
        return new BannerDto([
            'link' => $data['link'],
            'position' => $data['position'],
            'image' => $data['image'],

        ]);

    }
}