<?php


namespace App\Services\Admin\Repositories;


use App\Models\User;
use App\Repositories\BaseRepository;
use App\Services\Admin\Repositories\PartnerRepositoryInterface;

class PartnerRepository extends BaseRepository implements PartnerRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }
}