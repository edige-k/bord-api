<?php


namespace App\Services\Admin\Contracts\Admin\Additional;


use App\Models\Additional;
use App\Services\Admin\DTO\Additional\AdditionalCreateDto;

interface AdditionalUpdateContract
{
    public function execute(Additional $additional,AdditionalCreateDto $dto): void;

}