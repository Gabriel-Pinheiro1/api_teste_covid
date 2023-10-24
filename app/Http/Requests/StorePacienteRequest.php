<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePacienteRequest extends FormRequest
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
        return [
            'nome' => [
                'required',
                'min:3',
                'max:200',
                'regex:/^[\p{L}\s]+$/u'
            ],

            'cpf' => [
                'required',
                'unique:pacientes,cpf',
                'cpf',
                'formato-cpf'
            ],

            'telefone' => [
                'required',
                'celular_com_ddd',
                'unique:pacientes,telefone'
            ],

            'imagem' => [
                'required',
                'image',
                'mimes:png,jpeg, jpg'
            ],

            'data_nascimento' => [
                'required',
                'date'
            ],

            'condicao' => [
                'required',
                Rule::in(['Não atendido', 'Potencial infectado', 'Possível infectado', 'Sintomas insuficientes']),
            ]

        ];
    }
}
