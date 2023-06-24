<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /** en esta parte se lleva a cabo la utorizacion */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

     /**Estos son los parametro de validación */
    public function rules()
    {
        return [
            //
            'email'=>'required|email:rfc,dns|unique:users,email',
            'username'=>'unique:users,username',
            'password'=>'required|min:8',
            'password_confirmation'=>'required|same:password'
        ];
    }
}
