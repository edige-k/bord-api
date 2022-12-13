<?php


namespace App\Services\Organization\Actions\News;


use App\Models\News;

use App\Services\Organization\Contracts\News\NewsUpdateContract;
use App\Services\Organization\DTO\News\NewsUpdateDto;
use App\Services\SubActions\Organization\News\NewsMediaUploadAction;

class NewsUpdateAction implements NewsUpdateContract{
    public function execute(News $news, NewsUpdateDto $dto): void
    {
        // TODO: Implement execute() method.
        $this->updateNews($news,$dto);
        $this->uploadMedia($news,$dto);
    }

    public function updateNews(News $news,NewsUpdateDto $dto){
        return $news->update($dto->toArray());
    }
    private function uploadMedia($news,NewsUpdateDto $dto):void    {
        app(NewsMediaUploadAction::class)->run(
            $news, $dto->image,
        );
    }
}