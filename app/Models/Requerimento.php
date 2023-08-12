<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requerimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'matricula',
        'email',
        'cpf',
        'tipo_requerimento',
        'observacoes',
        'status',
        'data_requerimento',
        'hora_requerimento'
    ];
}
