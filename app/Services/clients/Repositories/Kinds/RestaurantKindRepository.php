<?php


namespace App\Services\clients\Repositories\Kinds;


use App\Models\Kind;
use App\Models\Organization;
use App\Repositories\BaseRepository;
use App\Services\Admin\Repositories\Kind\KindRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class RestaurantKindRepository extends BaseRepository implements RestaurantKindsRepositoryInterface
{
    public function __construct(Organization $model)
    {
        $this->model = $model;
    }
    public function KindId(
        string $city_id,
        string $kind_id,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection
    {
        return $this->model
            ->query()
            ->city($city_id)
            ->select($columns)
            ->kindId($kind_id)
            ->averageRating()
            ->countComments()
            ->whereActivated()
            ->whereOpened()
            ->with($relations)
            ->withCount($relations_count)
            ->latest('id')
            ->get();
    }
}