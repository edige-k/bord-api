<?php


namespace App\Services\Admin\Actions\Partner;


use App\Models\User;

class PartnerStatusAction
{
    public function activate($data){
        $data->ACTIVED_AT =now()->toDateTimeString();
        $data->save();
    }
    public function block($data){
        $data->ACTIVED_AT =NULL;
        $data->BLOCKED_AT =now()->toDateTimeString();
        $data->save();
    }
    public function null($data){
        $data->ACTIVED_AT =NULL;
        $data->BLOCKED_AT =NULL;
        $data->save();
    }
}