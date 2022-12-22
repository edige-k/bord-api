<?php


namespace App\Services\clients\Action\Auth;


use App\Enums\Client\CodeStatus\CodeStatus;
use App\Models\Client;
use App\Models\Clientsconfirm;
use App\Services\clients\Contracts\Auth\ConfirmCodeContract;
use App\Services\clients\Requests\Auth\ClientConfirmCodeRequest;
use PhpParser\Node\Scalar\String_;


class ConfirmCodeAction implements ConfirmCodeContract
{
        public function execute(Client $client, ClientConfirmCodeRequest $request):array
    {
        $checkup =Clientsconfirm::where('clientsconfirmable_id',$client->id)->latest()->first();
        if($this->check($checkup,$request)==true) {
              $checkup->status=CodeStatus::USED;
              $checkup->save();
              $token = $this->generateToken($client);
              return ['token' => $token,
                  'token_type' => 'Bearer'];
          }
          else{
              return ['code' => 'Неправильный код'];
          }
    }
        private function check($checkup,$request):bool{
            return  $checkup->code==$request->code;
        }
        private function generateToken(Client $client){
        return $client->createToken('auth_token')->plainTextToken;
    }
}