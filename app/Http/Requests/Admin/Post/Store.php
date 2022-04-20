<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class Store extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'category_id' => '',
            'tags_ids'=> 'nullable|array',
            'preview_image'=> 'nullable|file',
            'main_image'=> 'nullable|file',
            // 'tags_ids.*'=> 'nullable|exists:tag.id',
        ];
    }

    public function messages(){

        return [
            'title.required' => 'заполни поле дурак!',
        ];
    }

}
