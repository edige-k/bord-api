<?php


namespace App\Services\Admin\Actions\City;


use App\Models\City;
use App\Services\Admin\Contracts\Admin\City\CityUpdateContract;
use App\Services\Admin\DTO\City\CityCreateDto;
use Illuminate\Support\Facades\DB;

class CityUpdateAction implements CityUpdateContract
{
    public function execute(City $city, CityCreateDto $dto): void
    {
        DB::transaction(function () use($city, $dto)
        {
            $this->updatePartner($city, $dto);
        });
    }

    private function updatePartner(City $city,CityCreateDto $dto):bool{
        return $city->update($dto->toArray());

    }
}