<?php


namespace App\Services\Admin\Actions\Kind;


use App\Services\Admin\Contracts\Admin\Kind\KindCreateContract;
use App\Services\Admin\DTO\Kind\KindCreateDto;
use App\Services\Admin\Repositories\Kind\KindRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KindCreateAction implements KindCreateContract
{

    private KindRepositoryInterface $repository;

    public function __construct(KindRepositoryInterface $repository){
        $this->repository = $repository;
    }
    public function execute(KindCreateDto $dto): void
    {
        // TODO: Implement execute() method.
        DB::transaction(function () use( $dto)
        {
            $this->createKind($dto);
        });
    }

    private function createKind(KindCreateDto $dto):Model {

        return  $this->repository->create($dto->toArray());
    }
}