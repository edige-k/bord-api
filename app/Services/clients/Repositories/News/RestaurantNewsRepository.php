<?php


namespace App\Services\clients\Repositories\News;


use App\Models\News;
use App\Models\Organization;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Collection;

class RestaurantNewsRepository extends BaseRepository implements RestaurantNewsRepositoryInterface
{
    public function __construct(News $model)
    {
       $this->model= $model;
    }
    public function getAllNews(
        string $city,
        array $columns = ['*'],
        array $relations = [],
        array $relations_count = []
    ): Collection
    {
        return $this->model
            ->query()
            ->select($columns)
            ->with($relations)
            ->haveNews()
            ->withCount($relations_count)
            ->get();
    }


}
