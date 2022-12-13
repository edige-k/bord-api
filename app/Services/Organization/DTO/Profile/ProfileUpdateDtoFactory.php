<?php


namespace App\Services\Organization\DTO\Profile;


use App\Services\Organization\Requests\Profile\ProfileUpdateRequest;

class ProfileUpdateDtoFactory
{
    public static function fromRequest(ProfileUpdateRequest $request) :ProfileUpdateDto{
        return self::fromArray($request->validated());
    }
    public static function fromArray(array $data):ProfileUpdateDto
    {
        return new ProfileUpdateDto([
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