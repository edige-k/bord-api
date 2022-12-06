<?php


namespace App\Services\Admin\DTO\Partner;
use Spatie\DataTransferObject\DataTransferObject;


class PartnerUpdateDto extends DataTransferObject
{
    public string $name;
    public string $email;
    public ?string $password;
}