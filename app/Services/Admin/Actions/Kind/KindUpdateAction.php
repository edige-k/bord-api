<?php


namespace App\Services\Admin\Actions\Kind;


use App\Models\Kind;
use App\Services\Admin\Contracts\Admin\Kind\KindUpdateContract;
use App\Services\Admin\DTO\Kind\KindCreateDto;
use Illuminate\Support\Facades\DB;

class KindUpdateAction implements KindUpdateContract
{
    public function execute(Kind $kind, KindCreateDto $dto): void
    {
        DB::transaction(function () use($kind, $dto)
        {
            $this->updatePartner($kind, $dto);
        });
    }

    private function updatePartner(Kind $kind,KindCreateDto $dto):bool{
        return $kind->update($dto->toArray());

    }
}