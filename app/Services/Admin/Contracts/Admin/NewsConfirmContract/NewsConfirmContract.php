<?php


namespace App\Services\Admin\Contracts\Admin\NewsConfirmContract;


use App\Models\News;

interface NewsConfirmContract
{
    public function confirm(News $news): bool;
    public function notconfirm(News $news): bool;
    public function destroy(News $news):bool;

}