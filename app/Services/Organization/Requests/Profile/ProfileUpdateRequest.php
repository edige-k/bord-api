<?php

namespace App\Services\Organization\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'city_id'=>['required', 'exists:cities,id'],
            'name'=>['required', 'string', 'max:255'],
            'description'=>['required', 'string'],
            'average_check'=>['required', 'int'],
            'link'=>['required', 'string'],
            'instagram'=>['required', 'string'],
            'kitchen_id' => ['required'],
            'kind_id' => ['required'],
            'additional_id' => ['required'],
            'dates' => ['required','array'],
            'dates.*.week' => ['required', 'string','exists:dates'],
            'dates.*.from'=>['required', 'string','max:255'],
            'dates.*.end'=>['required', 'string','max:255'],
            'image' => ['required', 'array'],
            'image.*.mime'=>['mimes:jpeg,png,jpg,gif,svg'],
            "file" => "required|mimes:pdf,doc,docx|max:10000"
        ];
    }
}
