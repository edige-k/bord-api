<?php


namespace App\Services\Admin\DTO\Banner;


use Spatie\DataTransferObject\DataTransferObject;

class BannerDto extends DataTransferObject
{
    public string $link;
    public int $position;
    public array $image;


}