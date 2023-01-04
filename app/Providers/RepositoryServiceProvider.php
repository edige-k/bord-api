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
use App\Services\clients\Repositories\Kinds\RestaurantKindRepository;
use App\Services\clients\Repositories\Kinds\RestaurantKindsRepositoryInterface;
use App\Services\clients\Repositories\MainKinds\RestaurantMainKindsInterface;
use App\Services\clients\Repositories\MainKinds\RestaurantMainKindsRepository;
use App\Services\clients\Repositories\MainKitchens\RestaurantMainKitchensRepository;
use App\Services\clients\Repositories\MainKitchens\RestaurantMainKitchensRepositoryInterface;
use App\Services\clients\Repositories\News\RestaurantNewsIdRepository;
use App\Services\clients\Repositories\News\RestaurantNewsIdRepositoryInterface;
use App\Services\clients\Repositories\News\RestaurantNewsRepository;
use App\Services\clients\Repositories\News\RestaurantNewsRepositoryInterface;
use App\Services\clients\Repositories\Restaurant\RestaurantPageRepository;
use App\Services\clients\Repositories\Restaurant\RestaurantPageRepositoryInterface;
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
        RestaurantPageRepositoryInterface::class=>RestaurantPageRepository::class,
        RestaurantKindsRepositoryInterface::class=>RestaurantKindRepository::class,
        RestaurantMainKindsInterface::class=>RestaurantMainKindsRepository::class,
        RestaurantMainKitchensRepositoryInterface::class=>RestaurantMainKitchensRepository::class,
        RestaurantNewsRepositoryInterface::class=>RestaurantNewsRepository::class,
        RestaurantNewsIdRepositoryInterface::class=>RestaurantNewsIdRepository::class,
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
