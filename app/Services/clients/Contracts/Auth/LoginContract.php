<?php


namespace App\Services\clients\Contracts\Auth;


use App\Models\Clientsconfirm;
use App\Services\clients\Requests\Auth\LoginRequest;

interface LoginContract
{
    public function execute(LoginRequest $phone):array;

}