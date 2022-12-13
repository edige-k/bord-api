<?php


namespace App\Services\Organization\Requests\News;


use App\Models\News;
use App\Services\Organization\Contracts\News\NewsDestroyContract;

class NewsDestroyAction implements NewsDestroyContract
{
    public function execute(News $news): bool
    {
        return $news->delete();    }
}