<?php


namespace App\Services\clients\DTO\Comment;


use App\Models\Organization;
use App\Services\clients\Requests\Comments\CommentRequest;
use Illuminate\Support\Facades\Auth;

class CommentDtoFactory
{
    public static function fromRequest(CommentRequest $request):CommentDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):CommentDto{
        return new CommentDto([
            'body'=>$data['body'],
            'rating'=>$data['rating'],
        ]);
    }
}
