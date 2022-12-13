<?php


namespace App\Services\Organization\Repositories\Dates;


use App\Models\Date;
use App\Repositories\BaseRepository;

class DateRepository extends BaseRepository implements DateRepositoryInterface
{
    public function __construct(Date $date)
    {
        $this->model = $date;
    }
}