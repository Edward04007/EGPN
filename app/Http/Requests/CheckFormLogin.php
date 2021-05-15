<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckFormLogin extends FormRequest
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
            'username' => 'required|max:40',
            'password' => 'required|max:16'
        ];
    }

    public function messages()
    {
        return[
            'username.required'=> 'Preencha o campo de usuário!',
            'password.required'=> 'Preencha o campo de senha!',
            'username.max'=> 'Usuário não encontrado!',
            'password.max'=> 'Senha muito longa!',
            'password.min'=> 'Senha muito curta!'
        ];
    }
}
