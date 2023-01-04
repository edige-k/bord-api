<?php


namespace App\Services\clients\Contracts\restaurant\News;


use Illuminate\Database\Eloquent\Collection;

interface RestaurantNewsIdContract
{
    public function execute(string $city,string $newsId):Collection;

}