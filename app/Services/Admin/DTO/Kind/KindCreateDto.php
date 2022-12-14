<?php


namespace App\Services\Admin\DTO\Kind;


use Spatie\DataTransferObject\DataTransferObject;

class KindCreateDto extends DataTransferObject
{
    public string $name;
    public int $type;
    public ?int $position;
}