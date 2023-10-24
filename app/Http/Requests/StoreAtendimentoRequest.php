<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAtendimentoRequest extends FormRequest

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
                'required',
                'boolean'
            ],

            'coriza' => [
                'required',
                'boolean'
            ],

            'nariz_entupido' => [
                'required',
                'boolean'
            ],

            'cansaco' => [
                'required',
                'boolean'
            ],

            'tosse' => [
                'required',
                'boolean'
            ],

            'dor_cabeca' => [
                'required',
                'boolean'
            ],

            'dor_corpo' => [
                'required',
                'boolean'
            ],

            'dor_garganta' => [
                'required',
                'boolean'
            ],

            'mal_estar' => [
                'required',
                'boolean'
            ],

            'dificuldade_respirar' => [
                'required',
                'boolean'
            ],

            'dificuldade_locomocao' => [
                'required',
                'boolean'
            ],

            'falta_paladar' => [
                'required',
                'boolean'
            ],

            'falta_olfato' => [
                'required',
                'boolean'
            ],

            'diarreia' => [
                'required',
                'boolean'
            ],

            'condicao_atendimento' => [
                'required',
                Rule::in(['Não atendido', 'Potencial infectado', 'Possível infectado', 'Sintomas insuficientes']),
                
            ],

            'fCardiaca' => [
                'required',
                'not_in:0'
                
            ],

            'fRespiratoria' => [
                'required',
                'not_in:0'                
            ],

            'pressaoSis' => [
                'required',
                'not_in:0'
                
            ],

            'pressaoDis' => [
                'required',
                'not_in:0'
                
            ],

            'temperatura' => [
                'required',
                'not_in:0'
                
            ],
        ];
    }
}
