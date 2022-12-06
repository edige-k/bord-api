<?php

namespace App\Services\Admin\Requests\Admin\Partner;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
class PartnerUpdateRequest extends FormRequest
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
            'name'=>'required',
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'string', 'min:4', 'max:6', 'regex:/^[0-9]+$/'],
            'status'=> ['nullable','string', 'max:255'],
        ];
    }
}
