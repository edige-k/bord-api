<?php


namespace App\Services\clients\DTO\Register;


use App\Services\clients\Requests\Auth\RegisterRequest;

class RegisterDtoFactory
{
    public static function fromRequest(RegisterRequest $request) :RegisterDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):RegisterDto
    {
        return new RegisterDto([
            'phone'=>$data['phone'],
            'name'=>$data['name'],
            'lastname'=>$data['lastname'],
            'email'=>$data['email'],
            'male'=>$data['male'],
            'friend_code'=>$data['friend_code'],
            'code'=>strval(rand(1000,9000)),
            'description'=>'Регистрация'
        ]);

    }
}