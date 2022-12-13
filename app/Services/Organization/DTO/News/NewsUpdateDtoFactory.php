<?php


namespace App\Services\Organization\DTO\News;


use App\Enums\News\NewsStatusEnum;
use App\Services\Organization\Requests\News\NewsUpdateRequest;

class NewsUpdateDtoFactory
{
    public static function fromRequest(NewsUpdateRequest $request) :NewsUpdateDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):NewsUpdateDto
    {
        return new NewsUpdateDto([
            'title'=> $data['title'],
            'content'=>$data['content'],
            'starts_at'=>$data['starts_at'],
            'ends_at'=>$data['ends_at'],
            'image'=>$data['image'],
            'status'=>NewsStatusEnum::notconfirmed,

        ]);
    }
}