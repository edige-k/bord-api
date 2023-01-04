<?php

namespace App\Models;

use App\Enums\Kind\KindTypeEnum;
use App\Traits\HasComments;
use App\Traits\HasScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kind extends Model
{
    use HasFactory,HasComments,HasScopes;
    protected $fillable = [
        'name',
        'type',
        'position'
    ];
    public function organizations()
    {
        return $this->belongsToMany(Organization::class)
            ->with('kitchens:kitchens.id,name', 'open_dates:organization_id,week,from,end', 'file:files.id,fileable_id,fileable_type,name,url');
    }
    protected $hidden=[
        'created_at',
        'updated_at'
    ];



}
