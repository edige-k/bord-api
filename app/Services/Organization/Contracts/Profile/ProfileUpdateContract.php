<?php


namespace App\Services\Organization\Contracts\Profile;


use App\Models\Organization;
use App\Services\Organization\DTO\Profile\ProfileCreateDto;
use App\Services\Organization\DTO\Profile\ProfileUpdateDto;

interface ProfileUpdateContract
{
    public function execute(Organization $organization,ProfileUpdateDto $dto): void;

}