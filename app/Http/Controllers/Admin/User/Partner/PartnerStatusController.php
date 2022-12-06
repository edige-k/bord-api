<?php

namespace App\Http\Controllers\Admin\User\Partner;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\Admin\Actions\Partner\PartnerStatusAction;
use Illuminate\Http\Request;

class PartnerStatusController extends Controller
{
    public $service;
    public function __construct(PartnerStatusAction $service){
        $this->service = $service;
    }
    public function activate($id){
        $status = User::find($id);
        $this->service->activate($status);
        return response()->json('Activated Succesfully');
    }
    public function block($id){
        $status = User::find($id);
        $this->service->block($status);
        return response()->json('Blocked Successfully');
    }
    public function null($id){
        $status = User::find($id);
        $this->service->null($status);
        return response()->json('Nulled Successfully');
    }
}
