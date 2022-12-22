<?php


namespace App\Services\clients\Action\Auth;


use App\Enums\User\RoleEnum;
use App\Models\Client;
use App\Models\Clientsconfirm;
use App\Services\clients\Contracts\Auth\LoginContract;
use App\Services\clients\DTO\Register\ConfirmCodeDto;
use App\Services\clients\Requests\Auth\LoginRequest;

use Illuminate\Validation\ValidationException;
use Throwable;

class LoginAction implements LoginContract
{

    /**
     * @param string $phone
     * @throws ValidationException
     * @throws Throwable
     */
    public function execute(LoginRequest $request):array
    {
        try {
            $number=$request->phone;
            $client = Client::where('phone',$number)->first();
            if ( $client->phone==$number) {
                $this->code($client);
                return ['Все правильно теперь введите код для потверждение'];
            }
            else {
                return [
                    'Эти учетные данные не соответствуют нашим записям.'];
            }
        } catch (Throwable $e) {
            report($e);

            return ['Эти учетные данные не соответствуют нашим записям.'];
        }

    }
    private function code($client){
        $clientsconfirm = [ 'code'=>strval(rand(1000,9000)),
            'description'=>'Логин'];
       $client->clientsconfirm()->create($clientsconfirm);

    }
    /**
     * @param string $phone
     * @throws ValidationException
     */

}