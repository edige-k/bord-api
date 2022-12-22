<?php


namespace App\Services\clients\DTO\Register;


use Spatie\DataTransferObject\DataTransferObject;

class ConfirmCodeDto extends DataTransferObject
{
    public string $code;
    public string $description;
}