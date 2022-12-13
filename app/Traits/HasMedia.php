<?php

namespace App\Traits;

use App\Models\File;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasMedia
{
    /**
     * @return MorphOne
     */
    public function file(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable');
    }

    /**
     * @return MorphMany
     */
    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    /**
     * @return string|null
     */
    public function getFile(): ?string
    {
        return $this->file?->getFile();
    }

    /**
     * @return void
     */
    public function deleteMedias(): void
    {
        $this->files->each->delete();
    }
}
