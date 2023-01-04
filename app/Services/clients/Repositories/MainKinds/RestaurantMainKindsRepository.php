<?php


namespace App\Services\clients\Repositories\MainKinds;


use App\Models\Kind;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;


class RestaurantMainKindsRepository extends BaseRepository  implements RestaurantMainKindsInterface
{
    public function __construct(Kind $model)
    {
        $this->model = $model;
    }

    public function getKindList(string $value, ?string $key): array
    {
        return  $this->model
            ->query()->kindType()->orderBy('kinds.position')->pluck($value,$key)->toArray();
    }
}