<?php

namespace App\Models;

use Barryvdh\LaravelIdeHelper\Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class File
 * @package App\Models
 * @property int $id
 * @property string $name
 * @property string $mime
 * @property string $ext
 * @property int $size
 * @property string $url
 * @property int $fileable_id
 * @property string $fileable_type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read Model|Eloquent $fileable
 *
 * @method static Builder|File query()
 * @mixin Eloquent
 */
class File extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }
    public function getFile(): ?string
    {
        return Storage::exists($this->url)
            ? asset(Storage::url($this->url))
            : Storage::cloud()->url($this->url);
    }
}
