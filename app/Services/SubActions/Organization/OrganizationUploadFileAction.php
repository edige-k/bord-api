<?php


namespace App\Services\SubActions\Organization;


use App\Enums\Media\MediaType;
use App\Facades\Media;
use App\Models\Organization;
use Illuminate\Http\UploadedFile;

class OrganizationUploadFileAction
{
    public function run(Organization $organization, ?UploadedFile $file, bool $drop_current_medias = true): void
    {

        if($file)
        {
            if($drop_current_medias){
                $organization->deleteMedias();
            }
            $organization->file()->create(
                Media::addMedia($file)->toStoragePath(config('filesystems.storage.organization')) + [
                    'type' => MediaType::file
                ]
            );
        }
    }
}