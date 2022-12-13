<?php


namespace App\Services\SubActions\Admin\Banner;


use App\Enums\Media\MediaType;
use App\Facades\Media;
use App\Models\Banner;

class BannerUploadMediaAction
{

    public function run(Banner $banner, ?array $files, bool $drop_current_medias = true): void
    {

        if (is_array($files)) {
            if ($drop_current_medias) {
                $banner->deleteMedias();
            }
        }
        foreach ($files as $file) {
            $banner->files()->create(
                Media::addMedia($file)->toStoragePath(config('filesystems.storage.banner')) + [
                    'type' => MediaType::image
                ]
            );
        }
    }

}