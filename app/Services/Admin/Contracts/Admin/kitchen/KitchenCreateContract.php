<?php


namespace App\Services\Admin\Contracts\Admin\kitchen;


use App\Services\Admin\DTO\Kitchen\KitchenCreateDto;

interface KitchenCreateContract
{
    public function execute(KitchenCreateDto $dto ): void;
}