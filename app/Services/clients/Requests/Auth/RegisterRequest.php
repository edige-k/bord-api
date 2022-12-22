<?php

namespace App\Services\clients\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guest();

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => ['required','string','min:8','max:11', 'unique:clients'],
            'name'=>['required', 'string','max:50'],
            'lastname'=>['required', 'string','max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'male'=>['required', 'string'],
            'friend_code'=>['nullable','string','size:6'],
        ];
    }
}
