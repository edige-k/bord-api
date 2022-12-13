<?php


namespace App\Services\SubActions\Organization;


use App\Enums\Media\MediaType;
use App\Facades\Media;
use App\Models\Organization;
use Illuminate\Http\UploadedFile;

/**
 * Class OrganizationUploadMediaAction
 * @package App\Services\SubActions\Organization
 * @param Organization $organization
 * @param UploadedFile|null $file
 * @param bool $drop_current_medias
 * @return void
 */
class OrganizationUploadMediaAction
{
    public function run(Organization $organization, ?array $files, bool $drop_current_medias = true): void
    {

        if (is_array($files)) {
            if ($drop_current_medias) {
                $organization->deleteMedias();
            }
        }
        foreach ($files as $file) {
            $organization->files()->create(
                Media::addMedia($file)->toStoragePath(config('filesystems.storage.organization')) + [
                    'type' => MediaType::image
                ]
            );
        }
    }

}