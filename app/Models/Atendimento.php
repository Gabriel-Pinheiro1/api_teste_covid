<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    use HasFactory;
    protected $fillable = [
        'paciente_id',
        'febre',
        'coriza',
        'nariz_entupido',
        'cansaco',
        'tosse',
        'dor_cabeca',
        'dor_corpo',
        'dor_garganta',
        'mal_estar',
        'dificuldade_respirar',
        'dificuldade_locomocao',
        'falta_paladar',
        'falta_olfato',
        'diarreia',
        'condicao_atendimento'
            


    ];
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
