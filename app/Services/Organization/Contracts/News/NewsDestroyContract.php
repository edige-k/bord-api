<?php


namespace App\Services\Organization\Contracts\News;


use App\Models\News;

interface NewsDestroyContract
{
   public function execute(News $news):bool;

}