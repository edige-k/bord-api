<?php


namespace App\Services\Admin\DTO\Partner;


use App\Services\Admin\Requests\Admin\Partner\PartnerUpdateRequest;

class PartnerUpdateDtoFactory
{
    public static function fromRequest(PartnerUpdateRequest $request): PartnerUpdateDto
    {
        return self::fromArray($request->validated());
    }

    public static function fromArray(array $data):PartnerUpdateDto
    {
        return new PartnerUpdateDto([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'] ?? null

        ]);


    }
}