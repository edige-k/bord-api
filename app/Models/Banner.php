<?php

namespace App\Models;

use App\Traits\HasMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory ,HasMedia;
    protected $fillable = [
        'link',
        'position',
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
