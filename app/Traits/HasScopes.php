<?php


namespace App\Traits;





use App\Enums\Kind\KindTypeEnum;
use App\Models\Date;
use App\Models\Kind;
use App\Models\News;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Carbon;


trait HasScopes
{
       public function open_dates(){
       $arr = array(
           "Понедельник" => 1,
           "Вторник" => 2,
           "Среда" => 3,
           "Четверг" => 4,
           "Пятница" => 5,
           "Суббота" => 6,
           "Воскресенье" => 7,
       );
        $day = array_search(now()->dayOfWeek, $arr);
       return $this->hasMany(Date::class)->where('week','=',$day);
}

    public function scopeWhereActivated($query){
        return $query
            ->join('users', 'organizations.partner_id', '=', 'users.id')
            ->where('users.ACTIVED_AT','!=',null);

    }

    public function scopeWhereOpened($query){
        $arr = array(
            "Понедельник" => 1,
            "Вторник" => 2,
            "Среда" => 3,
            "Четверг" => 4,
            "Пятница" => 5,
            "Суббота" => 6,
            "Воскресенье" => 7,
        );
        $day = array_search(now()->dayOfWeek, $arr);
        return $query
            ->join('dates', 'organizations.id', '=', 'dates.organization_id')
            ->where('dates.week','=',$day)
            ->where('dates.from', '<', gmdate('H:i', time() + ('+6' * 3600)))
            ->where('dates.end', '>', gmdate('H:i', time() + ('+6' * 3600)));
    }
    public function scopeAverageRating($query){
        return $query->withAvg('comments', 'rating');
    }
    public function scopeCountComments($query){
        return $query->withCount('comments');
    }

    public function scopePopular($query){
        return $query->withAvg('comments', 'rating')->orderBy('comments_avg_rating', 'desc');
    }

    public function scopeCity($query,string $city_id){
        return $query
            ->where( 'organizations.city_id', '=',$city_id);
    }
    public function scopeKindType($query){
        return $query
            ->where('type','=',KindTypeEnum::MAIN);
    }

    public function scopeKindId($query,$kind_id){
        return $query
            ->join('kind_organization','organizations.id','=','kind_organization.organization_id')
            ->where('kind_organization.kind_id','=',$kind_id)->orderBy('kind_organization.position');
    }
    public function scopeHaveNews($query){
       $date= date('Y-m-d');
        return $query->where('ends_at','>',$date);
    }
    public function scopeNewsId($query,$newsId){
        return $query
            ->join('news','organizations.id','=','news.newsable_id')
            ->where('news.newsable_type','=','App\Models\Organization')
            ->where('news.id','=',$newsId);
    }
}