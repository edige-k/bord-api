<?php


namespace App\Services\Organization\Actions\News;


use App\Models\News;

use App\Services\Organization\Contracts\News\NewsUpdateContract;
use App\Services\Organization\DTO\News\NewsUpdateDto;
use App\Services\SubActions\Organization\News\NewsMediaUploadAction;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Js;

class NewsUpdateAction implements NewsUpdateContract{
    public function execute(News $news, NewsUpdateDto $dto)
    {
        // TODO: Implement execute() method.
        $this->uploadMedia($news,$dto);
        return  $this->updateNews($news,$dto);

    }

    public function updateNews(News $news,NewsUpdateDto $dto){
        $user_id=Auth::user()->getAuthIdentifier();
        if($news->newsable->partner_id==$user_id){
            $news->update($dto->toArray());
            return response()->json('success');
        }
        else{
            return 404;
        }

    }
    private function uploadMedia($news,NewsUpdateDto $dto):void    {
        app(NewsMediaUploadAction::class)->run(
            $news, $dto->image,
        );
    }
}