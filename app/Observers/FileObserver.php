<?php

namespace App\Observers;

use App\Facades\Media;
use App\Models\File;

class FileObserver
{
    /**
     * @param File $file
     */
    public function deleted(File $file): void
    {
        Media::deleteFile($file->url);
    }
}
