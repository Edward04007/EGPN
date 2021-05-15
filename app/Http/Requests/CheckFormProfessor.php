<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckFormProfessor extends FormRequest
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
            'userFoto' => 'required|max:31',
            'username' => 'required|max:40',
            'password' => 'required|min:8|max:16'
        ];
    }

    public function messages()
    {
        return[
            'userFoto.required' => 'Preencha o campo de foto',
            'username.required'=> 'Preencha o campo de usuário!',
            'password.required'=> 'Preencha o campo de senha!',
            'username.max'=> 'Nome de usuário muito longo!',
            'password.max'=> 'Senha muito longa!',
            'password.min'=> 'Senha muito curta!'
        ];
    }
}
