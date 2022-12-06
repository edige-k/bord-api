<?php

namespace App\Http\Controllers\Admin\User\Account;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Admin\Resources\User\ProfileResource;
class ProfileController extends Controller
{
    public function index(){
//        $user = Auth::user();
        return new ProfileResource(Auth::user());
    }
}
