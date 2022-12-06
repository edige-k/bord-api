<?php


namespace App\Services\Admin\Actions\Partner;


use App\Models\User;
use App\Services\Admin\Contracts\Admin\Partner\updatePartnerContract;
use App\Services\Admin\DTO\Partner\PartnerUpdateDto;
use Illuminate\Support\Facades\DB;


class PartnerUpdateAction implements updatePartnerContract
{

    public function execute(User $user, PartnerUpdateDto $partnerUpdateDto): void
    {
        DB::transaction(function () use($user, $partnerUpdateDto)
        {
            $this->updatePartner($user, $partnerUpdateDto);
        });
    }

    private function updatePartner(User $user,PartnerUpdateDto $partnerUpdateDto):bool{
        return $user->update($partnerUpdateDto->toArray());

    }

}