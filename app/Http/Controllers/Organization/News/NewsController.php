<?php

namespace App\Http\Controllers\Organization\News;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Services\Organization\Contracts\News\NewsCreateContract;
use App\Services\Organization\Contracts\News\NewsDestroyContract;
use App\Services\Organization\Contracts\News\NewsUpdateContract;
use App\Services\Organization\DTO\News\NewsCreateDtoFactory;
use App\Services\Organization\DTO\News\NewsUpdateDtoFactory;
use App\Services\Organization\Requests\News\NewsCreateRequest;
use App\Services\Organization\Requests\News\NewsUpdateRequest;
use App\Services\Organization\Resources\News\NewsResource;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        return NewsResource::collection(News::all());
    }
    public function store(NewsCreateRequest $request){
        app(NewsCreateContract::class)->execute
        (NewsCreateDtoFactory::fromRequest($request));
        return response()->json("Created news");
    }

    public function update(News $news,NewsUpdateRequest $request){
        app(NewsUpdateContract::class)->execute
        ( $news,NewsUpdateDtoFactory::fromRequest($request));
        return response()->json("Updated news");
    }
    public function destroy(News $news){
        app(NewsDestroyContract::class)->execute(
            $news
        );
        return response()->json("News Deleted Succesfully");

    }
}
