<?php


namespace App\Services\clients\Contracts\restaurant\Main;


use Illuminate\Database\Eloquent\Collection;

interface RestaurantMainGetContract
{
    public function execute(string $city):array;
}