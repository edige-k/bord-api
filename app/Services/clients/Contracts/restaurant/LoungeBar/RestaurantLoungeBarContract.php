<?php


namespace App\Services\clients\Contracts\restaurant\LoungeBar;


use App\Models\Kind;
use Illuminate\Database\Eloquent\Collection;

interface RestaurantLoungeBarContract
{
    public function execute(string $city,Kind $kind):Collection;
}