<?php


namespace App\Services\clients\DTO\Register;


use Spatie\DataTransferObject\DataTransferObject;

class RegisterDto extends DataTransferObject
{
    public string $phone;
    public string $name;
    public string $lastname;
    public string $email;
    public string $male;
    public ?string $friend_code;
    public string $code;
    public string $description;

}