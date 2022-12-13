<?php


namespace App\Services\Organization\Actions\News;


use App\Models\News;
use App\Models\User;
use App\Services\Organization\Contracts\News\NewsCreateContract;
use App\Services\Organization\DTO\News\NewsCreateDto;
use App\Services\SubActions\Organization\News\NewsMediaUploadAction;
use App\Services\SubActions\Organization\OrganizationUploadMediaAction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsCreateAction implements NewsCreateContract
{
    public function execute(NewsCreateDto $dto): void
    {
        // TODO: Implement execute() method.
        DB::transaction(function () use($dto)
        {
            /** @var User $partner */
            $partner = Auth::user();
            $organization= $partner->organization;
            $news = $this->createNews($organization,$dto);
            $this->uploadMedia($news,$dto);
        });
    }

    private function createNews($organization,NewsCreateDto $dto){
       return $organization->news()->create($dto->toArray());
    }

    private function uploadMedia($news,NewsCreateDto $dto):void    {
        app(NewsMediaUploadAction::class)->run(
            $news, $dto->image,
        );
    }

}