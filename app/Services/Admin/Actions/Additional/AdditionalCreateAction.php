<?php


namespace App\Services\Admin\Actions\Additional;


use App\Services\Admin\Contracts\Admin\Additional\AdditionalCreateContract;
use App\Services\Admin\DTO\Additional\AdditionalCreateDto;
use App\Services\Admin\Repositories\Additional\AdditionalRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdditionalCreateAction implements AdditionalCreateContract
{
    private AdditionalRepositoryInterface $repository;

    public function __construct(AdditionalRepositoryInterface $repository){
        $this->repository = $repository;
    }
    public function execute(AdditionalCreateDto $dto): void
    {
        // TODO: Implement execute() method.
        DB::transaction(function () use( $dto)
        {
            $this->createAdditional($dto);


        });
    }

    private function createAdditional(AdditionalCreateDto $dto):Model {

        return  $this->repository->create($dto->toArray());
    }
}