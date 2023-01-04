<?php


namespace App\Services\Organization\Contracts\News;


use App\Models\News;
use App\Services\Organization\DTO\News\NewsUpdateDto;

interface NewsUpdateContract
{
    public function execute(News $news,NewsUpdateDto $dto );

}