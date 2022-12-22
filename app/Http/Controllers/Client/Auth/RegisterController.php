<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Services\clients\Contracts\Auth\ConfirmCodeContract;
use App\Services\clients\Contracts\Auth\RegisterContract;
use App\Services\clients\DTO\Register\RegisterDtoFactory;
use App\Services\clients\Requests\Auth\ClientConfirmCodeRequest;
use App\Services\clients\Requests\Auth\RegisterRequest;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request): JsonResponse{
        app(RegisterContract::class)->execute
        (RegisterDtoFactory::fromRequest($request));

        return response()->json("Succes and after please write code for confirmation");
    }


}
