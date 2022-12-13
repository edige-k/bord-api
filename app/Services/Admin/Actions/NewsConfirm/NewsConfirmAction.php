<?php


namespace App\Services\Admin\Actions\NewsConfirm;


use App\Enums\News\NewsStatusEnum;
use App\Models\News;
use App\Services\Admin\Contracts\Admin\NewsConfirmContract\NewsConfirmContract;

class NewsConfirmAction implements NewsConfirmContract
{

    public function confirm(News $news): bool
    {
        $news->status=NewsStatusEnum::confirmed;
        $news->send_at=now()->toDateTimeString();
        return $news->save();
    }


    public function notconfirm(News $news): bool
    {
        $news->status=NewsStatusEnum::notconfirmed;
        $news->send_at=null;
        return $news->save();
    }


    public function destroy(News $news): bool
    {
       return $news->delete();
    }

}