<?php


namespace App\Services\clients\Contracts\Auth;


use App\Services\clients\DTO\Register\RegisterDto;

interface RegisterContract
{
    public function execute(RegisterDto $dto ): void;

}