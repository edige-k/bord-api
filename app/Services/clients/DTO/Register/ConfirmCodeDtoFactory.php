<?php


namespace App\Services\clients\DTO\Register;


use App\Services\clients\Requests\Auth\LoginRequest;

class ConfirmCodeDtoFactory
{
    public static function fromRequest(LoginRequest $request) :ConfirmCodeDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):ConfirmCodeDto
    {
        return new ConfirmCodeDto([
            'code'=>strval(rand(1000,9000)),
            'description'=>'Логин'
        ]);

    }
}