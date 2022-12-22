<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Clientsconfirm extends Model
{
    use HasFactory;
    protected $table = 'clientsconfirm';
    protected $fillable=[
        'code',
        'description',
        'status',
        'clientsconfirmable_type',
        'clientsconfirmable_id',
    ];

    public function clientsconfirmable(): MorphTo
    {
        return $this->morphTo();
    }
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
