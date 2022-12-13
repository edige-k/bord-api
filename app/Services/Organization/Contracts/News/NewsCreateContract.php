<?php


namespace App\Services\Organization\Contracts\News;


use App\Services\Organization\DTO\News\NewsCreateDto;

interface NewsCreateContract
{
    public function execute(NewsCreateDto $dto ): void;

}