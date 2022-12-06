<?php


namespace App\Services\Admin\Contracts\Admin\Kind;


use App\Models\Kind;
use App\Services\Admin\DTO\Kind\KindCreateDto;

interface KindUpdateContract
{
    public function execute(Kind $kind,KindCreateDto $dto): void;

}