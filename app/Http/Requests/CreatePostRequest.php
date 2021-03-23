<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'=>'bail|required|unique:posts,title|min:3',
            'intro' => 'bail|required|max:255',
            'content' => 'required',
            'image' => 'bail|required|file|mimes:jpg,bmp,png',
            'category_id' => 'bail|required|exists:categories,id'
        ];
    }
    public function messages()
    {
        return [
            "title.required" => "Title is required."
        ];
    }
}
