<?php

namespace App\Services\clients\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'phone' => $this->phone,
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'male' => $this->male,
            'friend_code' => $this->friend_code,
//            'clientsconfirm'=>$this->clientsconfirm,
            'roles'=>$this->roles,
            ];

    }
}
