<?php


namespace App\Services\Organization\Actions\Profile;


use App\Models\Organization;
use App\Models\User;
use App\Services\Organization\Contracts\Profile\ProfileUpdateContract;
use App\Services\Organization\DTO\Profile\ProfileUpdateDto;
use App\Services\SubActions\Organization\OrganizationUploadFileAction;
use App\Services\SubActions\Organization\OrganizationUploadMediaAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileUpdateAction implements ProfileUpdateContract
{
    public function execute(Organization $organization, ProfileUpdateDto $dto): void
    {
        DB::transaction(function () use($organization, $dto)
        {
            $this->updatePartner($organization, $dto);
            $this->selecetKitchen($organization,$dto);
            $this->selecetKind($organization,$dto);
            $this->selecetAdditional($organization,$dto);
            $this->createDates($organization,$dto);
            $this->uploadMedia($organization,$dto);
            $this->uploadFile($organization,$dto);
        });
    }
    private function updatePartner(Organization $organization,ProfileUpdateDto $dto):void{
        $organization->update($dto->toArray());
    }

    private function selecetKitchen(Organization $organization,ProfileUpdateDto $dto) {
        $organization->kitchens()->sync($dto->kitchen_id);
    }

    private function selecetKind(Organization $organization,ProfileUpdateDto $dto) {
        $organization->kinds()->sync($dto->kind_id);

    }
    private function selecetAdditional(Organization $organization,ProfileUpdateDto $dto) {
        $organization->additionals()->sync($dto->additional_id);
    }
    private function createDates( $organization,ProfileUpdateDto $dto) {
        $organization->dates()->delete($dto->dates);
        $organization->dates()->createMany($dto->dates);

    }
    private function uploadMedia($organization,ProfileUpdateDto $dto):void    {
        app(OrganizationUploadMediaAction::class)->run(
            $organization, $dto->image,
        );
    }

    private function uploadFile($organization,ProfileUpdateDto $dto):void    {
        app(OrganizationUploadFileAction::class)->run(
            $organization, $dto->file,
        );
    }
}
