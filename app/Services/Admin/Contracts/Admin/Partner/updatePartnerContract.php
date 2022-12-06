<?php


namespace App\Services\Admin\Contracts\Admin\Partner;


use App\Models\User;
use App\Services\Admin\DTO\Partner\PartnerUpdateDto;

interface updatePartnerContract
{
    public function execute(User $user,PartnerUpdateDto $partnerCreateDto): void;

}