<?php

namespace App\Http\Requests\AccessControll;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
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

            'name' => 'string',

            'display_name'=>'string' ,

            'description'=>'string'

        ];


    }

    public function messages()
{
    return [
        
        'name.string' =>'الأسم يجب ان يكون نص',
     
    ];
 }


    public function failedValidation(Validator $validator)
    {
   throw new HttpResponseException(response()->json([

     'success'   => false,

     'message'   => 'Validation errors',

     'errors'      => $validator->errors()

   ]));
    }
}
