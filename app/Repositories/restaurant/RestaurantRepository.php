<?php


namespace App\Repositories\restaurant;


use App\Models\Organization;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;


class RestaurantRepository extends BaseRepository implements RestaurantRepositoryInterface
{
    public function __construct(Organization $organization)
    {
        $this->model = $organization;
    }

    public function OpenRestaurant(
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection
    {
        return $this->model
            ->query()
            ->select($columns)
            ->whereActivated()
            ->whereOpened()
            ->with($relations)
            ->withCount($relations_count)
            ->latest('id')
            ->get();
    }

}