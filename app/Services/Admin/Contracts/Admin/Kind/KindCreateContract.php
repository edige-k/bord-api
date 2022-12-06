<?php


namespace App\Services\Admin\Contracts\Admin\Kind;


use App\Services\Admin\DTO\Kind\KindCreateDto;

interface KindCreateContract
{
    public function execute(KindCreateDto $dto ): void;
}