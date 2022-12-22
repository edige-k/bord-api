<?php

namespace App\Providers;

use App\Repositories\Banner\BannerRepository;
use App\Repositories\Banner\BannerRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Repositories\EloquentRepositoryInterface;
use App\Repositories\restaurant\RestaurantRepository;
use App\Repositories\restaurant\RestaurantRepositoryInterface;
use App\Services\Admin\Repositories\Additional\AdditionalRepository;
use App\Services\Admin\Repositories\Additional\AdditionalRepositoryInterface;
use App\Services\Admin\Repositories\City\CityRepository;
use App\Services\Admin\Repositories\City\CityRepositoryInterface;
use App\Services\Admin\Repositories\Kind\KindRepository;
use App\Services\Admin\Repositories\Kind\KindRepositoryInterface;
use App\Services\Admin\Repositories\Kitchen\KitchenRepository;
use App\Services\Admin\Repositories\Kitchen\KitchenRepositoryInterface;
use App\Services\Admin\Repositories\PartnerRepository;
use App\Services\Admin\Repositories\PartnerRepositoryInterface;
use App\Services\Organization\Repositories\Profile\ProfileRepository;
use App\Services\Organization\Repositories\Profile\ProfileRepositoryInterface;
use Faker\Provider\Base;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public array $bindings = [
        EloquentRepositoryInterface::class=>BaseRepository::class,
        PartnerRepositoryInterface::class=>PartnerRepository::class,
        CityRepositoryInterface::class=>CityRepository::class,
        KitchenRepositoryInterface::class=>KitchenRepository::class,
        KindRepositoryInterface::class=>KindRepository::class,
        AdditionalRepositoryInterface::class=>AdditionalRepository::class,
        ProfileRepositoryInterface::class=>ProfileRepository::class,
        BannerRepositoryInterface::class=>BannerRepository::class,
        RestaurantRepositoryInterface::class=>RestaurantRepository::class,
    ];
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
