<?php


namespace App\Services\Organization\Repositories\Profile;


use App\Models\Organization;
use App\Repositories\BaseRepository;

class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{
    public function __construct(Organization $organization)
    {
        $this->model = $organization;
    }
}