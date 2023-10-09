<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdatePacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('paciente');
        return [
            'nome' => [
                'nullable',
                'min:3',
                'max:200'
            ],

            'cpf' => [
                'nullable',
                'cpf',
                'formato_cpf',
                Rule::unique('pacientes')->ignore($id)
            ],

            'telefone' => [
                'nullable',
                'telefone_com_ddd',
                Rule::unique('pacientes')->ignore($id)
                
            ],

            'imagem' => [
                'nullable',
            ],

            'data_nascimento' => [
                'nullable'
            ],

            'condicao' => [
                'nullable'
            ]
        ];
    }
}
