<?php


namespace App\Services\Admin\DTO\Kitchen;


use Spatie\DataTransferObject\DataTransferObject;

class KitchenCreateDto extends DataTransferObject
{
    public string $name;
}