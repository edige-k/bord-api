<?php


namespace App\Services\clients\Contracts\restaurant\MainPage;


use App\Models\Organization;

interface RestaurantPageContract
{
    public function execute(Organization $organization):array;
}