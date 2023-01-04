<?php


namespace App\Services\clients\Action\Restautant\News;


use App\Services\clients\Contracts\restaurant\News\RestaurantNewsIdContract;
use App\Services\clients\tasks\News\RestaurantGetAllNewsTask;
use App\Services\clients\tasks\News\RestaurantGetIdNewsTask;
use Illuminate\Database\Eloquent\Collection;
class RestaurantNewsGetIdAction implements RestaurantNewsIdContract
{

    public function execute( string $city,string $newsId): Collection
    {
        $news = $this->getNews($city,$newsId);
        return $news;
    }

    public function getNews(string $city,string $newsId):Collection
    {
        return app(RestaurantGetIdNewsTask::class)->run($city,$newsId);
    }
}