<?php

namespace App\Models;

use App\Traits\HasComments;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Client extends  Authenticatable
{

    use HasApiTokens, HasFactory, Notifiable, HasRoles,HasComments;
    protected $fillable=[
        'phone',
        'name',
        'lastname',
        'email',
        'male',
        'friend_code',
    ];
    protected array $guard_name = ['api', 'web'];

    public function clientsconfirm():MorphOne
    {
        return $this->morphOne(Clientsconfirm::class, 'clientsconfirmable');
    }
    protected $hidden=[
        'created_at',
        'updated_at'
    ];


}
