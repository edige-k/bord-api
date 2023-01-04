<?php

namespace App\Http\Controllers\Client\User\RestaurantPage;

use App\Http\Controllers\Controller;

use App\Models\City;
use App\Models\Comment;
use App\Models\Organization;

use App\Services\clients\Contracts\restaurant\Comment\CommentContract;
use App\Services\clients\Contracts\restaurant\Comment\CommentUpdateContract;
use App\Services\clients\Contracts\restaurant\MainPage\RestaurantPageContract;
use App\Services\clients\DTO\Comment\CommentDtoFactory;
use App\Services\clients\Requests\Comments\CommentRequest;
use Illuminate\Support\Facades\Auth;
use Throwable;


class RestaurantPageController extends Controller
{
    public function index(City $city,Organization $organization){
       return app(RestaurantPageContract::class)->execute($organization);
    }
    public function store(City $city,CommentRequest $request,Organization $organization)
    {
        try {
        $comment = Comment::query()->where('client_id', Auth::user()->getAuthIdentifier())->where('organization_id','=',$organization->id)->first();
        if ($comment->client_id==Auth::user()->getAuthIdentifier() and $organization->id==$comment->organization_id) {
                return response()->json('вы можете только редактировать свою оценку, нельзя множество раз оценивать и тупо заполннять нашу базу');
            }
            else {
                app(CommentContract::class)->execute($organization,
                    CommentDtoFactory::fromRequest($request));
                return response()->json("Спасибо за честную оценку)");
            }
        } catch (Throwable $e) {
            report($e);
            app(CommentContract::class)->execute($organization,
                CommentDtoFactory::fromRequest($request));
            return response()->json("Спасибо за честную оценку)");
        }
    }

    public function update(City $city,Organization $organization ,Comment $comment,CommentRequest $request){
                app(CommentUpdateContract::class)->execute  ($organization,
                    $comment,CommentDtoFactory::fromRequest($request));
                return response()->json("Спасибо за честную оценку)");
    }
}
