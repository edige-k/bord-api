<?php


namespace App\Services\Organization\DTO\Profile;


use Spatie\DataTransferObject\DataTransferObject;

class ProfileUpdateDto extends DataTransferObject
{
    public int   $city_id;
    public string $name;
    public string $description;
    public int $average_check;
    public string $link;
    public string $instagram;
    public int  $kitchen_id;
    public int   $kind_id;
    public int  $additional;
}