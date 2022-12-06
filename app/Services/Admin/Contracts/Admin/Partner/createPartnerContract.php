<?php


namespace App\Services\Admin\Contracts\Admin\Partner;


use App\Services\Admin\DTO\Partner\PartnerCreateDto;

interface createPartnerContract
{
    public function execute(PartnerCreateDto $partnerCreateDto): void;

}