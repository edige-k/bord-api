<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Services\clients\Contracts\Auth\ConfirmCodeContract;
use App\Services\clients\Requests\Auth\ClientConfirmCodeRequest;

class ConfirmController extends Controller
{
    public function confirm(Client $client,ClientConfirmCodeRequest $request){
        return  app(ConfirmCodeContract::class)->execute($client,$request);
    }
}
