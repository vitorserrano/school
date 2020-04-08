<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelRegistration extends Model
{
    protected $table = 'registrations';
    protected $fillable = [
        'id_curso',
        'id_aluno',
        'id_instrutor',
        'data_matricula',
        'nota1',
        'nota2',
        'data_certificado',
        'identificador_certificado',
    ];

    public function relCurses() 
    {
        return $this->hasOne('App\Models\ModelCurse', 'id', 'id_curso');
    }

    public function relStudents() 
    {
        return $this->hasOne('App\Models\ModelStudent', 'id', 'id_aluno');
    }

    public function relInstructors() 
    {
        return $this->hasOne('App\Models\ModelInstructor', 'id', 'id_instrutor');
    }
}
