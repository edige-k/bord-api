<?php


namespace App\Services\Admin\Actions\Kitchen;


use App\Models\Kitchen;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenUpdateContract;
use App\Services\Admin\DTO\Kitchen\KitchenCreateDto;
use Illuminate\Support\Facades\DB;

class KitchenUpdateAction implements KitchenUpdateContract
{
    public function execute(Kitchen $kitchen, KitchenCreateDto $dto): void
    {
        DB::transaction(function () use($kitchen, $dto)
        {
            $this->updatePartner($kitchen, $dto);
        });
    }

    private function updatePartner(Kitchen $kitchen,KitchenCreateDto $dto):bool{
        return $kitchen->update($dto->toArray());

    }
}