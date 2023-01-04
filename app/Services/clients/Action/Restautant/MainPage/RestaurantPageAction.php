<?php


namespace App\Services\clients\Action\Restautant\MainPage;


use App\Models\Comment;
use App\Models\Organization;
use App\Services\clients\Contracts\restaurant\MainPage\RestaurantPageContract;
use App\Services\clients\Repositories\Restaurant\RestaurantPageRepositoryInterface;

class RestaurantPageAction implements RestaurantPageContract
{

    private RestaurantPageRepositoryInterface $repository;

    public function __construct(RestaurantPageRepositoryInterface $repository)
    {
        $this->repository=$repository;
    }
    public function execute(Organization $organization):array
    {
        $query=$this->repository->findRes($organization->id,
            ['city','kitchens', 'file','open_dates','news','comments:organization_comments.organization_id,body,rating']);
        return [$query];
    }
}