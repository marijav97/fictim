<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'intro' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|max:2000',
            'category_id' => 'bail|required|exists:categories,id'
        ];
    }

    public function messages(){
        return [
            'required' => 'The :attribute field is required.',
            'name.max' => 'Name must not be longer than :max characters.',
            'image.image' => 'Uploaded file must be an image.',
            'image.max' => 'Uploaded file must not be larger than :max kilobytes.'
        ];
    }
}
