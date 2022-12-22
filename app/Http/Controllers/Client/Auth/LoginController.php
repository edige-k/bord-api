<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\Clientsconfirm;
use App\Services\clients\Requests\Auth\LoginRequest;
use App\Services\clients\Contracts\Auth\LoginContract;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function login(LoginRequest $request):JsonResponse
    {
      $response = app(LoginContract::class)->execute($request);

       return response()->json($response);
    }
}
