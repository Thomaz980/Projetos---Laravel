<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'aviso',
        'remetente',
        'data',
    ];

    // protected $table = 'aviso';
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }

}
