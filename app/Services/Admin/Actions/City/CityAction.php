<?php


namespace App\Services\Admin\Actions\City;


use App\Services\Admin\Contracts\Admin\City\CityContract;
use App\Services\Admin\DTO\City\CityCreateDto;
use App\Services\Admin\Repositories\City\CityRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class CityAction implements CityContract
{
    private CityRepositoryInterface $repository;

    public function __construct(CityRepositoryInterface $repository){
        $this->repository = $repository;
    }
    public function execute(CityCreateDto $dto): void
    {
        // TODO: Implement execute() method.
        DB::transaction(function () use( $dto)
        {
            $this->createCity($dto);


        });
    }
    private function createCity(CityCreateDto $dto):Model {

        return  $this->repository->create($dto->toArray());
    }
}