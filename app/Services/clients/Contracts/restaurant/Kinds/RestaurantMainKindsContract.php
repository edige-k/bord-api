<?php


namespace App\Services\clients\Contracts\restaurant\Kinds;



use Illuminate\Database\Eloquent\Collection;

interface RestaurantMainKindsContract
{
    public function execute(string $city):Collection;

}