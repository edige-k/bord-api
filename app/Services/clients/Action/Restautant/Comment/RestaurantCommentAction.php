<?php


namespace App\Services\clients\Action\Restautant\Comment;



use App\Models\Client;
use App\Models\Comment;
use App\Models\Organization;
use App\Services\clients\Contracts\restaurant\Comment\CommentContract;
use App\Services\clients\DTO\Comment\CommentDto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RestaurantCommentAction implements CommentContract
{

    public function execute(Organization $organization,CommentDto $dto): void
    {
        DB::transaction(function () use($organization,$dto)
        {
           $this->createComment($dto,$organization);
        });
    }
    private function createComment($dto,Organization $organization):void{
         Comment::query()->where('client_id','',Auth::user()->getAuthIdentifier())->create($dto->toArray() + [
            'organization_id'=> $organization->id,'client_id'=>Auth::user()->getAuthIdentifier()
            ]);
    }

}