<?php

namespace App\Services\Organization\Requests\Kitchen;

use Illuminate\Foundation\Http\FormRequest;

class KitchenSelectRequest extends FormRequest
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
            'kitchen_id' => ['required','unique:kitchen_organization,kitchen_id'],
        ];
    }
}
