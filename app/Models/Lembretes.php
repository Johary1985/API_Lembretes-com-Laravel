<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lembretes extends Model
{
    use HasFactory;
    protected $fillable = ['usuario', 'descricao', 'titulo', 'repetir'];
}
