<?php

namespace App\Providers;


use App\Services\Admin\Actions\Additional\AdditionalCreateAction;
use App\Services\Admin\Actions\Additional\AdditionalUpdateAction;
use App\Services\Admin\Actions\Banners\BannerCreateAction;
use App\Services\Admin\Actions\Banners\BannerDeleteAction;
use App\Services\Admin\Actions\Banners\BannerUpdateAction;
use App\Services\Admin\Actions\City\CityAction;
use App\Services\Admin\Actions\Kind\KindCreateAction;
use App\Services\Admin\Actions\Kind\KindUpdateAction;
use App\Services\Admin\Actions\Kitchen\KitchenCreateAction;
use App\Services\Admin\Actions\Kitchen\KitchenDeleteAction;
use App\Services\Admin\Actions\Kitchen\KitchenUpdateAction;
use App\Services\Admin\Actions\NewsConfirm\NewsConfirmAction;
use App\Services\Admin\Actions\Partner\PartnerCreateAction;
use App\Services\Admin\Actions\Partner\PartnerUpdateAction;
use App\Services\Admin\Contracts\Admin\Additional\AdditionalCreateContract;
use App\Services\Admin\Contracts\Admin\Additional\AdditionalUpdateContract;
use App\Services\Admin\Contracts\Admin\Banner\BannerCreateContract;
use App\Services\Admin\Contracts\Admin\Banner\BannerDeleteContract;
use App\Services\Admin\Contracts\Admin\Banner\BannerUpdateContract;
use App\Services\Admin\Contracts\Admin\City\CityContract;
use App\Services\Admin\Contracts\Admin\Kind\KindCreateContract;
use App\Services\Admin\Contracts\Admin\Kind\KindUpdateContract;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenCreateContract;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenDeleteContract;
use App\Services\Admin\Contracts\Admin\kitchen\KitchenUpdateContract;
use App\Services\Admin\Contracts\Admin\NewsConfirmContract\NewsConfirmContract;
use App\Services\Admin\Contracts\Admin\Partner\createPartnerContract;
use App\Services\Admin\Contracts\Admin\Partner\updatePartnerContract;
use App\Services\Admin\Contracts\LoginContract;
use App\Services\Organization\Actions\News\NewsCreateAction;
use App\Services\Organization\Actions\News\NewsUpdateAction;
use App\Services\Organization\Actions\Profile\ProfileCreateAction;
use App\Services\Organization\Actions\Profile\ProfileUpdateAction;
use App\Services\Organization\Contracts\News\NewsCreateContract;
use App\Services\Organization\Contracts\News\NewsDestroyContract;
use App\Services\Organization\Contracts\News\NewsUpdateContract;
use App\Services\Organization\Contracts\Profile\ProfileCreateContract;
use App\Services\Organization\Contracts\Profile\ProfileUpdateContract;
use App\Services\Organization\Requests\News\NewsDestroyAction;
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
            NewsCreateContract::class=>NewsCreateAction::class,
            NewsUpdateContract::class=>NewsUpdateAction::class,
            NewsDestroyContract::class=>NewsDestroyAction::class,
            NewsConfirmContract::class=>NewsConfirmAction::class,
        BannerCreateContract::class=>BannerCreateAction::class,
        BannerUpdateContract::class=>BannerUpdateAction::class,
        BannerDeleteContract::class=>BannerDeleteAction::class,


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
