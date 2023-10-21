<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAtendimentoRequest extends FormRequest
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
            'febre' => [
                'nullable',
                'boolean'
            ],

            'coriza' => [
                'nullable',
                'boolean'
            ],

            'nariz_entupido' => [
                'nullable',
                'boolean'
            ],

            'cansaco' => [
                'nullable',
                'boolean'
            ],

            'tosse' => [
                'nullable',
                'boolean'
            ],

            'dor_cabeca' => [
                'nullable',
                'boolean'
            ],

            'dor_corpo' => [
                'nullable',
                'boolean'
            ],

            'dor_garganta' => [
                'nullable',
                'boolean'
            ],

            'mal_estar' => [
                'nullable',
                'boolean'
            ],

            'dificuldade_respirar' => [
                'nullable',
                'boolean'
            ],

            'dificuldade_locomocao' => [
                'nullable',
                'boolean'
            ],

            'falta_paladar' => [
                'nullable',
                'boolean'
            ],

            'falta_olfato' => [
                'nullable',
                'boolean'
            ],

            'diarreia' => [
                'nullable',
                'boolean'
            ],

            'condicao_atendimento' => [
                'nullable',
                
            ],

            'fCardiaca' => [
                'nullable',
                
            ],

            'fRespiratoria' => [
                'nullable',
                
            ],

            'pressaoSis' => [
                'nullable',
                
            ],

            'pressaoDis' => [
                'nullable',
                
            ],

            'temperatura' => [
                'nullable',
                
            ],
        ];
    }
}
