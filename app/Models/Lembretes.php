<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Lembretes extends Model {

    use SoftDeletes;
    protected $dates = ['deleted_at']; 

    use HasFactory;

    protected $fillable = [
        'usuario', 
        'descricao', 
        'titulo', 
        'repetir'
    ];
}
