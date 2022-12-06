<?php


namespace App\Services\Admin\DTO\Partner;


use App\Services\Admin\Requests\Admin\Partner\PartnerStoreRequest;

class PartnerCreateDtoFactory
{
    public static function fromRequest(PartnerStoreRequest $partnerStoreRequest) :PartnerCreateDto{
        return self::fromArray($partnerStoreRequest->validated());
    }
    public static function fromArray(array $data):PartnerCreateDto
    {
        return new PartnerCreateDto([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],

        ]);


    }
}