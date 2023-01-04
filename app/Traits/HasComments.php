<?php


namespace App\Traits;


use App\Models\Comment;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

trait HasComments
{
    /**
     * @return HasMany
     */
    public function comments():HasMany
    {
        return $this->hasMany(Comment::class);
    }


}