<?php


namespace App\Services\clients\Action\Restautant\News;


use App\Services\clients\Contracts\restaurant\News\RestaurantNewsContract;
use App\Services\clients\tasks\News\RestaurantGetAllNewsTask;
use Illuminate\Database\Eloquent\Collection;

class RestaurantNewsGetAction implements RestaurantNewsContract
{

    public function execute(string $city):Collection
    {
       $news = $this->getNews($city);
       return $news;
    }

    public function getNews(string $city):Collection{
        return app(RestaurantGetAllNewsTask::class)->run($city);
    }
}