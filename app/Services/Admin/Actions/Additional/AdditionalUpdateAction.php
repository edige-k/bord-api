<?php


namespace App\Services\Admin\Actions\Additional;


use App\Models\Additional;
use App\Services\Admin\Contracts\Admin\Additional\AdditionalUpdateContract;
use App\Services\Admin\DTO\Additional\AdditionalCreateDto;
use Illuminate\Support\Facades\DB;

class AdditionalUpdateAction implements AdditionalUpdateContract
{
    public function execute(Additional $additional, AdditionalCreateDto $dto): void
    {
        DB::transaction(function () use($additional, $dto)
        {
            $this->updatePartner($additional, $dto);
        });
    }

    private function updatePartner(Additional $additional,AdditionalCreateDto $dto):bool{
        return $additional->update($dto->toArray());

    }
}