<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'city_id',
        'name',
        'description',
        'average_check',
        'link',
        'instagram',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }




    public function city()
    {
        return $this->belongsTo(City::class);
    }


    public function kitchens()
    {
        return $this->belongsToMany(Kitchen::class);
    }
    public function kinds()
    {
        return $this->belongsToMany(Kind::class);
    }
    public function additionals()
    {
        return $this->belongsToMany(Additional::class);
    }
}
