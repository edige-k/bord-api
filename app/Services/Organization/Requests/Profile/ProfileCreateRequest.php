<?php

namespace App\Services\Organization\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class ProfileCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'partner_id',
            'city_id'=>['required', 'exists:cities,id'],
            'name'=>['required', 'string','max:255', 'unique:organizations'],
            'description'=>['required', 'string'],
            'average_check'=>['required', 'int'],
            'link'=>['required', 'string'],
            'instagram'=>['required', 'string'],
        ];
    }
}
