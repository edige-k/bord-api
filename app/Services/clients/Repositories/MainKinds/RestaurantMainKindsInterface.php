<?php


namespace App\Services\clients\Repositories\MainKinds;


use App\Repositories\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

interface RestaurantMainKindsInterface extends EloquentRepositoryInterface
{
    public function getKindList(
        string $value,
        ?string $key
    ): array;
}