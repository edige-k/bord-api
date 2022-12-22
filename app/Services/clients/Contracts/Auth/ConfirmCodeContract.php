<?php


namespace App\Services\clients\Contracts\Auth;


use App\Models\Client;
use App\Services\clients\Requests\Auth\ClientConfirmCodeRequest;

interface ConfirmCodeContract
{
    public function execute(Client $client,ClientConfirmCodeRequest $request ):array;

}