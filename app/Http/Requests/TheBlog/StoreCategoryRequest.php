<?php

namespace App\Http\Requests\TheBlog;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
        return [

          'name' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'الأسم مطلوب',
         
        ];
     }
    
}
