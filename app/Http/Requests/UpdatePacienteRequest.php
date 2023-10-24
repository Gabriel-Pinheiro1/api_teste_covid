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
                'max:200',
                'regex:/^[\p{L}\s]+$/u'
            ],

            'cpf' => [
                'nullable',
                'cpf',
                'formato_cpf',
                Rule::unique('pacientes')->ignore($id)
            ],

            'telefone' => [
                'nullable',
                'celular_com_ddd',
                Rule::unique('pacientes')->ignore($id)
                
            ],

            'imagem' => [
                'nullable',
                'image',
                'mimes: png, jpg, jpeg'
            ],

            'data_nascimento' => [
                'nullable',
                'date'
            ],

            'condicao' => [
                'nullable',
                Rule::in(['Não atendido', 'Potencial infectado', 'Possível infectado', 'Sintomas insuficientes']),
            ]
        ];
    }
}
