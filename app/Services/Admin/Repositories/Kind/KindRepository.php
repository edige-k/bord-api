<?php


namespace App\Services\Admin\Repositories\Kind;


use App\Models\Kind;
use App\Repositories\BaseRepository;
use App\Services\Admin\Repositories\City\CityRepositoryInterface;

class KindRepository extends BaseRepository implements KindRepositoryInterface
{
    public function __construct(Kind $kind)
    {
        $this->model = $kind;
    }

}