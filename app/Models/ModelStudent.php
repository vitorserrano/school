<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelStudent extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'nome_aluno',
        'cpf',
        'rg',
        'fone_celular',
        'email_aluno',
        'data_nascimento'
    ];
}
