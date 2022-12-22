<?php


namespace App\Services\Admin\Actions\Partner;


use App\Enums\User\RoleEnum;
use App\Services\Admin\Contracts\Admin\Partner\createPartnerContract;
use App\Services\Admin\DTO\Partner\PartnerCreateDto;
use App\Services\Admin\Repositories\PartnerRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PartnerCreateAction implements createPartnerContract
{
    private PartnerRepositoryInterface $partnerRepository;

    public function __construct(PartnerRepositoryInterface $partnerRepository){
        $this->partnerRepository = $partnerRepository;
    }
    public function execute(PartnerCreateDto $partnerCreateDto): void
    {
        // TODO: Implement execute() method.
        DB::transaction(function () use( $partnerCreateDto)
        {
            $user = $this->createPartner($partnerCreateDto);
                $user->assignRole(RoleEnum::PARTNER);
        });
    }
    private function createPartner(PartnerCreateDto $partnerCreateDto):Model {

            return  $this->partnerRepository->create($partnerCreateDto->toArray());
    }

}