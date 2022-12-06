<?php


namespace App\Services\Admin\Actions\Kitchen;


use App\Models\Kitchen;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenDeleteContract;

class KitchenDeleteAction implements KitchenDeleteContract
{
    public function execute(Kitchen $kitchen): bool
    {
        return $kitchen->delete();
    }
}