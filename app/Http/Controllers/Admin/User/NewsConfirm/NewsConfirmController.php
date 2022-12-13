<?php

namespace App\Http\Controllers\Admin\User\NewsConfirm;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Services\Admin\Contracts\Admin\NewsConfirmContract\NewsConfirmContract;
use App\Services\Organization\Resources\News\NewsResource;
use Illuminate\Http\Request;

class NewsConfirmController extends Controller
{
    public function index(){
        return NewsResource::collection(News::all());
    }
     public function confirm(News $news){
         app(NewsConfirmContract::class)->confirm(
             $news
         );
         return response()->json("News Confirmed Succesfully");
     }

     public function notconfirm(News $news){
         app(NewsConfirmContract::class)->notconfirm(
             $news
         );
         return response()->json("News Not Confirmed Succesfully");
     }
     public function destroy(News $news){
         app(NewsConfirmContract::class)->destroy(
             $news
         );
         return response()->json("News Deleted Succesfully");
     }
}
