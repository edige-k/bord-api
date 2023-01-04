<?php

namespace App\Models;

use App\Services\clients\DTO\Comment\CommentDto;
use App\Traits\HasMedia;
use App\Traits\HasScopes;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use App\Traits\HasComments;
/**
 * Class Organization
 * @package App\Models
 * @property-read File|null $file
 * @property-read Collection|File[] $files
 * @property-read int|null $files_count
 */
class Organization extends Model
{
    use HasFactory, HasMedia, HasScopes, HasComments;

    protected $fillable = [
        'partner_id',
        'city_id',
        'name',
        'description',
        'average_check',
        'link',
        'instagram',
    ];
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
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

    public function dates()
    {
        return $this->hasMany(Date::class);
    }

    public function news(): MorphMany
    {
        return $this->morphMany(News::class, 'newsable');
    }
}

