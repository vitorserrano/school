<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelInstructor extends Model
{
    protected $table = 'instructors';
    protected $fillable = [
        'nome_instrutor',
        'cpf',
        'rg',
        'fone_celular',
        'email_instrutor',
        'data_nascimento',
        'mini_curriculum'
    ];

    public function relRegistrations() 
    {
        return $this->hasMany('App\Models\ModelRegistration', 'id_instrutor');
    }
}
