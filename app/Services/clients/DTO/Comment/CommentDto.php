<?php


namespace App\Services\clients\DTO\Comment;


use Spatie\DataTransferObject\DataTransferObject;

class CommentDto extends DataTransferObject
{
    public string $body;
    public int $rating;
}