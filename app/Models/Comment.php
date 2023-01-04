<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'organization_comments';
    protected $fillable=[
        'organization_id',
        'client_id',
        'body',
        'rating',
    ];
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
    public function clients()
    {
        return $this->belongsTo(Client::class);
    }


}
