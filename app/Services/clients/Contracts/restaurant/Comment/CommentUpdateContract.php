<?php


namespace App\Services\clients\Contracts\restaurant\Comment;


use App\Models\Comment;
use App\Models\Organization;
use App\Services\clients\DTO\Comment\CommentDto;

interface CommentUpdateContract
{
    public function execute(Organization $organization,Comment $comment,CommentDto $dto):void;

}