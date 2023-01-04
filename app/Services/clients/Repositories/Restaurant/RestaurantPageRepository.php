<?php


namespace App\Services\clients\Repositories\Restaurant;


use App\Models\Organization;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

class RestaurantPageRepository extends BaseRepository implements RestaurantPageRepositoryInterface
{


    public function __construct(Organization $organization)
    {
        $this->model = $organization;
    }
    public function findRes(
        string $modelId,
        array $relations = [],
        array $relations_count = []
    ): ?Model
    {
      return $this->model
            ->query()
            ->averageRating()
            ->countComments()
            ->with($relations)
            ->withCount($relations_count)
            ->findOrFail($modelId)
          ;
    }
}