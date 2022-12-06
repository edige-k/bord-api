<?php


namespace App\Services\Admin\DTO\Partner;
use Spatie\DataTransferObject\DataTransferObject;


class PartnerCreateDto extends DataTransferObject
{
    public string $name;
    public string $email;
    public string $password;

}