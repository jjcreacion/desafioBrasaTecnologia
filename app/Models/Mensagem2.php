<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    use HasFactory;
    protected $fillable = [
        'idp',
        'aluno',
        'email',
        'whatsapp',
        'mensagem',
        'data',
        'status',
    ];
}
