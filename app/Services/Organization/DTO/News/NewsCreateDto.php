<?php


namespace App\Services\Organization\DTO\News;

use Spatie\DataTransferObject\DataTransferObject;

class NewsCreateDto extends DataTransferObject
{
    public string  $title;
    public string   $content;
    public string $starts_at;
    public string $ends_at;
    public array $image;
    public int $status;

}