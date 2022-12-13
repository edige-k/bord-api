<?php

namespace App\Services\Organization\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
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
            'title'=>['required','string','max:255'],
            'content'=>['required','string','max:500'],
            'starts_at'=>['required','date'],
            'ends_at'=>['required','date'],
            'image' => ['required', 'array'],
            'image.*.mime'=>['mimes:jpeg,png,jpg,gif,svg'],
        ];
    }
}
