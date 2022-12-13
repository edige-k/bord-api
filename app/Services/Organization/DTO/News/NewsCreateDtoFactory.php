<?php


namespace App\Services\Organization\DTO\News;


use App\Enums\News\NewsStatusEnum;
use App\Services\Organization\Requests\News\NewsCreateRequest;

class NewsCreateDtoFactory
{
    public static function fromRequest(NewsCreateRequest $request) :NewsCreateDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):NewsCreateDto
    {
        return new NewsCreateDto([
            'title'=> $data['title'],
            'content'=>$data['content'],
            'starts_at'=>$data['starts_at'],
            'ends_at'=>$data['ends_at'],
            'image'=>$data['image'],
            'status'=>NewsStatusEnum::notconfirmed,
        ]);

    }
}