<?php


namespace App\Facades;

use App\Helpers\MediaHelper;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Facade;


/**
 * Class Media
 * App\Helpers\MediaHelper
 * @method static array|null toStoragePath($storage_path, string|null $current_file_path = null)
 * @method static static addMedia(UploadedFile|null $file)
 * @method static void deleteFile(string|null $file_path)
 */
class Media extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'media';
    }
}