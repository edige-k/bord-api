<?php


namespace App\Services\Admin\Actions\Kitchen;


use App\Services\Admin\Contracts\Admin\kitchen\KitchenCreateContract;
use App\Services\Admin\DTO\Kitchen\KitchenCreateDto;
use App\Services\Admin\Repositories\Kitchen\KitchenRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KitchenCreateAction implements KitchenCreateContract
{
    private KitchenRepositoryInterface $repository;

    public function __construct(KitchenRepositoryInterface $repository){
        $this->repository = $repository;
    }
    public function execute(KitchenCreateDto $dto): void
    {
        // TODO: Implement execute() method.


        DB::transaction(function () use( $dto)
        {
            $this->createKitchen($dto);


        });
    }

    private function createKitchen(KitchenCreateDto $dto):Model {

        return  $this->repository->create($dto->toArray());
    }
}