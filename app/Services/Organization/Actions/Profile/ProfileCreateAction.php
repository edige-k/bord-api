<?php


namespace App\Services\Organization\Actions\Profile;


use App\Services\Organization\Contracts\Profile\ProfileCreateContract;
use App\Services\Organization\DTO\Profile\ProfileCreateDto;
use App\Services\Organization\Repositories\Profile\ProfileRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
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
        DB::transaction(function () use( $dto)
        {
            $this->createProfile($dto);
        });
    }
    private function createProfile(ProfileCreateDto $dto):Model {

        return  $this->repository->create($dto->toArray());
    }
}