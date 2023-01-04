<?php


namespace App\Services\clients\Contracts\restaurant\Comment;



use App\Models\Organization;
use App\Services\clients\DTO\Comment\CommentDto;

interface CommentContract
{
    public function execute(Organization $organization,CommentDto $dto):void;

}