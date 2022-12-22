<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kitchen extends Model
{
    use HasFactory;
    protected $fillable = [
        'name' ];
    public function organizations()
    {
        return $this->belongsToMany(Organization::class);
    }
    protected $hidden=[
        'created_at',
        'updated_at'
    ];

}
