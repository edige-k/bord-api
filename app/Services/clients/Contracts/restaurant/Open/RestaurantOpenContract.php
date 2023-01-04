<?php


namespace App\Services\clients\Contracts\restaurant\Open;


use App\Models\Kind;
use Illuminate\Database\Eloquent\Collection;

interface RestaurantOpenContract
{
    public function execute(string $value):Collection;
}