<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Lembretes extends Model {

    /* Uso do Softdelete para manter os dados na BD */
    use SoftDeletes;
    protected $dates = ['deleted_at']; 

    use HasFactory;

    /* Modelo da tabela */
    protected $fillable = [
        'usuario', 
        'descricao', 
        'titulo', 
        'repetir',
        'inicio',
        'fim',
    ];
}
