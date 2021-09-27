<?php

namespace App\Http\Requests\TheBlog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
         return  auth()->user()->hasRole(['admin','user']);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];

        if( $this->has('name') ) $rules['name'] = 'required';

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'الأسم مطلوب',
         
        ];
     }
}
