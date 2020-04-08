<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCurse extends Model
{
    protected $table = 'curses';
    protected $fillable = [
        'nome_curso',
        'carga_horaria',
        'ementa_curso'
    ];

    public function relRegistrations() 
    {
        return $this->hasMany('App\Models\ModelRegistration', 'id_curso');
    }
}
