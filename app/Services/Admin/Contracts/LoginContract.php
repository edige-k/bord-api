<?php


namespace App\Services\Admin\Contracts;

use Illuminate\Validation\ValidationException;
use Throwable;


interface LoginContract
{
    public function execute(string $email, string $password): array;

}