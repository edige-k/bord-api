<?php


namespace App\Services\clients\Action\Restautant\Comment;


use App\Models\Comment;
use App\Models\Organization;
use App\Services\clients\Contracts\restaurant\Comment\CommentUpdateContract;
use App\Services\clients\DTO\Comment\CommentDto;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommentUpdateAction implements CommentUpdateContract
{

    public function execute(Organization $organization,Comment $comment, CommentDto $dto): void
    {
        DB::transaction(function () use($organization,$comment,$dto)
        {
            $this->updateComment($organization,$comment,$dto);
        });
    }
    private function updateComment(Organization $organization,Comment $comment,$dto){

        $comment->query()->where('client_id','=', Auth::user()->getAuthIdentifier())->update($dto->toArray());
    }
}