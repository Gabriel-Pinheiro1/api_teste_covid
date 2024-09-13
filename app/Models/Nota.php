<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $fillable = ['atendimento_id', 'comentario'];

    public function atendimento(){
        return $this->belongsTo(Atendimento::class);
    }
}
