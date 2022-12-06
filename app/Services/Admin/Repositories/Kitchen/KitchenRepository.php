<?php


namespace App\Services\Admin\Repositories\Kitchen;


use App\Models\Kitchen;
use App\Repositories\BaseRepository;

class KitchenRepository extends BaseRepository implements KitchenRepositoryInterface
{
    public function __construct(Kitchen $kitchen)
    {
        $this->model = $kitchen;
    }
}