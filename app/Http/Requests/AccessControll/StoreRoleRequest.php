<?php

namespace App\Http\Requests\AccessControll;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;

use Auth ;

class StoreRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return auth()->user()->hasRole(['admin']);

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name' => 'required|string',

            'display_name'=>'required|string' ,

            'description'=>'string'

        ];


    }

    public function messages()
{
    return [
        'name.required' => 'الأسم مطلوب',
     
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