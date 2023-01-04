<?php


namespace App\Services\Organization\Actions\Profile;


use App\Models\Kitchen;
use App\Models\Organization;
use App\Models\User;
use App\Services\Organization\Contracts\Profile\ProfileCreateContract;
use App\Services\Organization\DTO\Profile\ProfileCreateDto;
use App\Services\Organization\Repositories\Profile\ProfileRepositoryInterface;
use App\Services\SubActions\Organization\OrganizationUploadFileAction;
use App\Services\SubActions\Organization\OrganizationUploadMediaAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileCreateAction implements ProfileCreateContract
{
    private ProfileRepositoryInterface $repository;

    public function __construct(ProfileRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function execute(ProfileCreateDto $dto): void
    {
        // TODO: Implement execute() method.
        DB::transaction(function () use($dto)
        {
            $organization = $this->createProfile($dto);
            $this->selecetKitchen($organization,$dto);
            $this->selecetKind($organization,$dto);
            $this->selecetAdditional($organization,$dto);
            $this->createDates($organization,$dto);
            $this->uploadMedia($organization,$dto);
            $this->uploadFile($organization,$dto);

        });
    }

    private function createProfile(ProfileCreateDto $dto):Model {
        return  $this->repository->create($dto->toArray());
    }
    private function selecetKitchen($organization,ProfileCreateDto $dto) {
        $organization->kitchens()->attach($dto->kitchen_id);
    }

    private function selecetKind($organization,ProfileCreateDto $dto) {
        $organization->kinds()->attach($dto->kind_id);

    }
    private function selecetAdditional($organization,ProfileCreateDto $dto) {
        $organization->additionals()->attach($dto->additional_id);
    }
    private function createDates($organization,ProfileCreateDto $dto) {
        $organization->dates()->createMany($dto->dates);
    }
    private function uploadMedia($organization,ProfileCreateDto $dto):void    {
       app(OrganizationUploadMediaAction::class)->run(
            $organization, $dto->image,
        );
    }
    private function uploadFile($organization,ProfileCreateDto $dto):void    {
        app(OrganizationUploadFileAction::class)->run(
            $organization, $dto->file,
        );

    }
}