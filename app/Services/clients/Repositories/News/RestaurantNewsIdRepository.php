<?php


namespace App\Services\clients\Repositories\News;


use App\Models\Organization;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class RestaurantNewsIdRepository extends BaseRepository implements RestaurantNewsIdRepositoryInterface
{

    public function __construct(Organization $model)
    {
        $this->model = $model;
    }

    public function getNewsId(
        string $city,
        string $modelId,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection
    {
        return $this->model
            ->query()
            ->city($city)
            ->newsId($modelId)
            ->select($columns)
            ->averageRating()
            ->countComments()
            ->whereActivated()
            ->with($relations)
            ->withCount($relations_count)
            ->latest('id')
            ->get();
    }
}