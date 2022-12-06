<?php

namespace App\Providers;


use App\Models\Kitchen;
use App\Services\Admin\Actions\Additional\AdditionalCreateAction;
use App\Services\Admin\Actions\Additional\AdditionalUpdateAction;
use App\Services\Admin\Actions\City\CityAction;
use App\Services\Admin\Actions\Kind\KindCreateAction;
use App\Services\Admin\Actions\Kind\KindUpdateAction;
use App\Services\Admin\Actions\Kitchen\KitchenCreateAction;
use App\Services\Admin\Actions\Kitchen\KitchenDeleteAction;
use App\Services\Admin\Actions\Kitchen\KitchenUpdateAction;
use App\Services\Admin\Actions\Partner\PartnerCreateAction;
use App\Services\Admin\Actions\Partner\PartnerUpdateAction;
use App\Services\Admin\Contracts\Admin\Additional\AdditionalCreateContract;
use App\Services\Admin\Contracts\Admin\Additional\AdditionalUpdateContract;
use App\Services\Admin\Contracts\Admin\City\CityContract;
use App\Services\Admin\Contracts\Admin\Kind\KindCreateContract;
use App\Services\Admin\Contracts\Admin\Kind\KindUpdateContract;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenCreateContract;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenDeleteContract;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenUpdateContract;
use App\Services\Admin\Contracts\Admin\Partner\createPartnerContract;
use App\Services\Admin\Contracts\Admin\Partner\updatePartnerContract;
use App\Services\Admin\Contracts\LoginContract;
use App\Services\Organization\Actions\Profile\ProfileCreateAction;
use App\Services\Organization\Actions\Profile\ProfileUpdateAction;
use App\Services\Organization\Contracts\Profile\ProfileCreateContract;
use App\Services\Organization\Contracts\Profile\ProfileUpdateContract;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public array $singletons = [

           createPartnerContract::class => PartnerCreateAction::class,
            updatePartnerContract::class=>PartnerUpdateAction::class,
            CityContract::class=>CityAction::class,
            KindCreateContract::class=>KindCreateAction::class,
            KindUpdateContract::class=>KindUpdateAction::class,
            KitchenCreateContract::class=>KitchenCreateAction::class,
            KitchenUpdateContract::class=>KitchenUpdateAction::class,
            KitchenDeleteContract::class=>KitchenDeleteAction::class,
            AdditionalCreateContract::class=>AdditionalCreateAction::class,
            AdditionalUpdateContract::class=>AdditionalUpdateAction::class,
            ProfileCreateContract::class=>ProfileCreateAction::class,
            ProfileUpdateContract::class=>ProfileUpdateAction::class,


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
