<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckFormDisciplina extends FormRequest
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
            'disc' => 'required|max:30'
        ];
    }

    public function messages()
    {
        return[
            'disc.required'=> 'É necessário digitar o nome da disciplina!',
            'disc.max'=> ' Nome muito longo!',
        ];
    }
}
