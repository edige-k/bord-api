<?php


namespace App\Services\clients\Action\Auth;


use App\Enums\User\RoleEnum;
use App\Models\Client;
use App\Services\clients\Contracts\Auth\RegisterContract;
use App\Services\clients\DTO\Register\RegisterDto;


class RegisterAction implements RegisterContract
{

    public function execute(RegisterDto $dto):void
    {
                $client = $this->registers($dto);
                $client->assignRole(RoleEnum::CLIENT);
                $this->code($client,$dto);
    }
    private function registers(RegisterDto $dto) {
        return Client::query()->create($dto->toArray());
    }
//    private function generateToken($client){
//       return $client->createToken('auth_token')->plainTextToken;
//    }
    private function code($client,RegisterDto $dto){
        return $client->clientsconfirm()->create($dto->toArray());
    }
}