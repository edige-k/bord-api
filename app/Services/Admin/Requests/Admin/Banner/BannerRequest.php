<?php

namespace App\Services\Admin\Requests\Admin\Banner;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'link'=>['required','string','max:500'],
            'position'=>['required','int'],
            'image' => ['required', 'array'],
            'image.*.mime'=>['mimes:jpeg,png,jpg,gif,svg'],
        ];
    }
}
