<?php


namespace App\Services\Organization\Contracts\Profile;


use App\Services\Organization\DTO\Profile\ProfileCreateDto;

interface ProfileCreateContract
{
    public function execute(ProfileCreateDto $dto ): void;

}