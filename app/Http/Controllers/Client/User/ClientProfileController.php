<?php

namespace App\Http\Controllers\Client\User;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Services\clients\Resources\ClientProfileResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientProfileController extends Controller
{
    public function index(){

        /** @var Client $client */
        $client = Auth::user();
//        dd($client);

        return new ClientProfileResource($client);
    }
}
