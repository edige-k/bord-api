<?php

namespace App\Services\Organization\Resources\Profile;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'id'=>$this->id,
            'partner_id'=>$this->partner_id,
            'city_id'=>$this->city_id,
            'name' => $this->name,
            'description'=>$this->description,
            'average_check'=>$this->average_check,
            'link'=>$this->link,
            'instagram'=>$this->instagram,
        ];
    }
}
