<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    use HasFactory;
    protected $fillable = [
        'organization_id',
        'week',
        'from',
        'end'
    ];
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

}
