<?php


namespace App\Services\Admin\Contracts\Admin\kitchen;


use App\Models\Kitchen;

interface KitchenDeleteContract
{
    public function execute(Kitchen $kitchen): bool;

}