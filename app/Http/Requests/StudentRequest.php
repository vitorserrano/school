<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'nome_aluno' => 'required',
            'cpf' => 'required|size:11|unique:connection.students,cpf',
            'fone_celular' => 'required|size:11',
            'email_aluno' => 'required|unique:connection.students,email_aluno',
        ];
    }
}
