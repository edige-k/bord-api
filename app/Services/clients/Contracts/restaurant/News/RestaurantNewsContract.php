<?php


namespace App\Services\clients\Contracts\restaurant\News;


use Illuminate\Database\Eloquent\Collection;

interface RestaurantNewsContract
{
    public function execute(string $city):Collection;
}