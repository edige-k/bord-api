<?php


namespace App\Services\Admin\Repositories\Additional;


use App\Models\Additional;
use App\Repositories\BaseRepository;
use App\Services\Admin\Repositories\City\CityRepositoryInterface;

class AdditionalRepository extends BaseRepository implements AdditionalRepositoryInterface
{
    public function __construct(Additional $additional)
    {
        $this->model = $additional;
    }
}