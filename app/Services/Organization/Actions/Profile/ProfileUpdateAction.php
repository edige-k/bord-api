<?php


namespace App\Services\Organization\Actions\Profile;


use App\Models\Organization;
use App\Services\Organization\Contracts\Profile\ProfileUpdateContract;
use App\Services\Organization\DTO\Profile\ProfileUpdateDto;
use Illuminate\Support\Facades\DB;

class ProfileUpdateAction implements ProfileUpdateContract
{
    public function execute(Organization $organization, ProfileUpdateDto $dto): void
    {
        DB::transaction(function () use($organization, $dto)
        {
            $this->updatePartner($organization, $dto);
        });
    }
    private function updatePartner(Organization $organization,ProfileUpdateDto $dto):bool{
        return $organization->update($dto->toArray());

    }
}