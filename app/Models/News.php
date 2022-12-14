<?php

namespace App\Models;

use App\Traits\HasMedia;
use App\Traits\HasScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class News extends Model
{
    use HasFactory, HasMedia,HasScopes;
    protected $fillable = [
        'title',
        'content',
        'starts_at',
        'ends_at',
        'status',
        'send_at',
        'newsable_id',
        'newsable_type',
    ];
    public function newsable(): MorphTo
    {
        return $this->morphTo();
    }
    protected $hidden=[
        'created_at',
        'updated_at'
    ];


}
