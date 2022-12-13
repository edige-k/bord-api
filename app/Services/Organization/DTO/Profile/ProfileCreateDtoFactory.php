<?php


namespace App\Services\Organization\DTO\Profile;


use App\Services\Organization\Requests\Profile\ProfileCreateRequest;
use Illuminate\Support\Facades\Auth;

class ProfileCreateDtoFactory
{
    public static function fromRequest(ProfileCreateRequest $request) :ProfileCreateDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):ProfileCreateDto
    {
        return new ProfileCreateDto([
            'partner_id'=> Auth::user()->getAuthIdentifier(),
            'city_id'=> $data['city_id'],
            'name'=>$data['name'],
            'description'=>$data['description'],
            'average_check'=>$data['average_check'],
            'link'=>$data['link'],
            'instagram'=>$data['instagram'],
            'kitchen_id'=>$data['kitchen_id'],
            'kind_id'=>$data['kind_id'],
            'additional_id'=>$data['additional_id'],
            'dates'=>$data['dates'],
            'image' => $data['image'],
            'file' => $data['file'],

        ]);

    }
}