<?php


namespace App\Services\Admin\Contracts\Admin\Additional;


use App\Services\Admin\DTO\Additional\AdditionalCreateDto;

interface AdditionalCreateContract
{
    public function execute(AdditionalCreateDto $dto ): void;
}