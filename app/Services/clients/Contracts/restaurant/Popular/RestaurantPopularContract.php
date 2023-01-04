<?php


namespace App\Services\clients\Contracts\restaurant\Popular;



use Illuminate\Database\Eloquent\Collection;

interface RestaurantPopularContract
{
    public function execute(string $city_id):Collection;
}
