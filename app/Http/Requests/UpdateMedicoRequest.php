<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMedicoRequest extends FormRequest {
    public function authorize() {
        return true; // Permite a requisição
    }

    public function rules() {
        return [
            'nome' => 'sometimes|required|string|max:255',
            'crm' => 'sometimes|required|string|max:20|unique:medicos,crm,' . $this->medico,
            'telefone' => 'nullable|string|max:15',
            'email' => 'nullable|string|email|max:255|unique:medicos,email,' . $this->medico
        ];
    }

    public function messages() {
        return [
            'nome.required' => 'O nome do médico é obrigatório.',
            'crm.required' => 'O CRM é obrigatório.',
            'crm.unique' => 'Este CRM já está cadastrado.',
            'email.email' => 'O e-mail precisa ser válido.',
            'email.unique' => 'Este e-mail já está cadastrado.'
        ];
    }
}
