<?php


namespace App\Services\SubActions\Organization\News;


use App\Enums\Media\MediaType;
use App\Facades\Media;
use App\Models\News;
use App\Models\Organization;
use Illuminate\Http\UploadedFile;

class NewsMediaUploadAction
{
    public function run(News $news, ?array $files, bool $drop_current_medias = true): void
    {

        if (is_array($files)) {
            if ($drop_current_medias) {
                $news->deleteMedias();
            }
        }
        foreach ($files as $file) {
            $news->files()->create(
                Media::addMedia($file)->toStoragePath(config('filesystems.storage.organization')) + [
                    'type' => MediaType::image
                ]
            );
        }
    }

}