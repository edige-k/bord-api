<?php


namespace App\Traits;




use App\Models\Date;

trait HasScopes
{
       public function open_dates(){
       $arr = array(
           "Понедельник" => 1,
           "Вторник" => 2,
           "Среда" => 3,
           "Четверг" => 4,
           "Пятницы" => 5,
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
            "Пятницы" => 5,
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



}