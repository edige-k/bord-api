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
        string $city_id,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection
    {
        return $this->model
            ->query()
            ->city($city_id)
            ->select($columns)
            ->averageRating()
            ->countComments()
            ->whereActivated()
            ->whereOpened()
            ->with($relations)
            ->withCount($relations_count)
            ->latest('id')
            ->get();
    }



    public function PopularRestaurant(
        string $city_id,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection
    {
        return $this->model
            ->query()
            ->city($city_id)
            ->select($columns)
            ->popular()
            ->countComments()
            ->whereActivated()
            ->whereOpened()
            ->with($relations)
            ->withCount($relations_count)
            ->latest('id')
            ->get();
    }


}