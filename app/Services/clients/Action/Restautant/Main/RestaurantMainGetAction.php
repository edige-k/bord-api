<?php


namespace App\Services\clients\Action\Restautant\Main;


use App\Models\Kind;
use App\Services\clients\Contracts\restaurant\Main\RestaurantMainGetContract;
use App\Services\clients\tasks\Main\Banner\BannerTask;
use App\Services\clients\tasks\Main\Kinds\RestaurantMainGetKindIdTask;
use App\Services\clients\tasks\Main\Kinds\RestaurantMainGetKindsRestaurantTask;
use App\Services\clients\tasks\Main\Kitchens\RestaurantMainGetKitchensTask;
use App\Services\clients\tasks\Main\OpenRestaurant\RestaurantMainGetOpenRestaurantTask;
use App\Services\clients\tasks\Main\PopularRestaurant\RestaurantMainGetPopularRestaurantTask;
use Illuminate\Database\Eloquent\Collection;


class RestaurantMainGetAction implements RestaurantMainGetContract
{

    public function execute(string $city): array
    {
        $banners = $this->getBanner();
        $openNows=$this->getOpenOrganization($city);
        $populars=$this->getPopularOrganization($city);
        $kinds= $this->getMainKindsList($city);
        $kitchens=$this->getKitchens();

       return [
           'banners'=>$banners,
           'открытые сейчас'=>$openNows,
            'популярные'=>$populars,
           'типы'=>$kinds,
           'кухни'=>$kitchens,

       ];
    }
    public function getBanner():Collection{
        return app(BannerTask::class)->run();
    }
    public function getOpenOrganization($city):Collection{
        return app(RestaurantMainGetOpenRestaurantTask::class)->run($city);
    }
    public function getPopularOrganization($city):Collection{
        return app(RestaurantMainGetPopularRestaurantTask::class)->run($city);
    }
    public  function getMainKindsList(string $city):array{
        $types=collect();
        $data=$this->getKindsList();
        collect($data)->each(function($value,$key) use($types,$city){
            $types->push([
                   'id'=>$key,
                'name'=>$value,
                'items'=>$this->getKindId($city,$key)
                ]);
        });
        return $types->toArray();
    }
    public function getKindsList():array{
    $kinds= app(RestaurantMainGetKindsRestaurantTask::class)->run();
    return $kinds;
    }
    public function getKindId(string $city,string $kind_id):Collection{
        $kindId= app(RestaurantMainGetKindIdTask::class)->run($city,$kind_id);
        return  $kindId;
    }

    public function getKitchens():array{
       return $kitchens= app(RestaurantMainGetKitchensTask::class)->run('name','id');
    }
}