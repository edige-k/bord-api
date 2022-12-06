<?php


namespace App\Services\Admin\Contracts\Admin\kitchen;


use App\Models\Kitchen;
use App\Services\Admin\DTO\Kitchen\KitchenCreateDto;

interface KitchenUpdateContract
{
    public function execute(Kitchen $kitchen,KitchenCreateDto $dto): void;

}