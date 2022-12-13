<?php


namespace App\Services\Organization\DTO\Profile;


use Illuminate\Http\UploadedFile;
use Spatie\DataTransferObject\DataTransferObject;

class ProfileUpdateDto extends DataTransferObject
{
    public int   $city_id;
    public string $name;
    public string $description;
    public int $average_check;
    public string $link;
    public string $instagram;
    public array  $kitchen_id;
    public array   $kind_id;
    public array  $additional_id;
    public array $dates;
    public array $image;
    public ?UploadedFile $file;
}