<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ModelStudent;
use App\Models\ModelCurse;
use App\Models\ModelInstructor;
use App\Models\ModelRegistration;

class RegistrationController extends Controller
{
    
    private $objStudent;
    private $objCurse;
    private $objInstructor;
    private $objRegistration;

    public function __construct()
    {   
        $this->objStudent = new ModelStudent();
        $this->objCurse = new ModelCurse();
        $this->objInstructor = new ModelInstructor();
        $this->objRegistration = new ModelRegistration();
    }

    public function index()
    {   
        $registration = $this->objRegistration->paginate(5);
        return view('registration.index', compact('registration'));
    }

    public function create()
    {
        $student = $this->objStudent->all();
        $curse = $this->objCurse->all();
        $instructor = $this->objInstructor->all();
        return view('registration.create', compact('student', 'curse', 'instructor'));
    }

    public function store(Request $request)
    {   
        $this->validate($request, array(
            'id_curso' => 'required',
            'id_aluno' => 'required|unique:registrations,id_aluno',
            'id_instrutor' => 'required',
            'data_matricula' => 'required',
            'nota1' => 'required',
            'nota2' => 'required',
            'data_certificado' => 'required',
            'identificador_certificado' => 'required',
        ));

        $registration = $this->objRegistration->create([
            'id_curso' => $request->id_curso,
            'id_aluno' => $request->id_aluno,
            'id_instrutor' => $request->id_instrutor,
            'data_matricula' => $request->data_matricula,
            'nota1' => $request->nota1,
            'nota2' => $request->nota2,
            'data_certificado' => $request->data_certificado,
            'identificador_certificado' => $request->identificador_certificado,
        ]);

        if ($registration) { 
            return redirect('/registration');
        }
    }

    public function show($id)
    {   
        $registration = $this->objRegistration->find($id);
        return view('registration.show', compact('registration'));
    }

    public function edit($id)
    {
        $registration = $this->objRegistration->find($id);

        $student = $this->objStudent->all();
        $curse = $this->objCurse->all();
        $instructor = $this->objInstructor->all();
        return view('registration.create', compact('registration', 'student', 'curse', 'instructor'));
    }

    public function update(Request $request, $id)
    {   
        $this->validate($request, array(
            'id_curso' => 'required',
            'id_aluno' => "required|unique:registrations,id_aluno, $id",
            'id_instrutor' => 'required',
            'data_matricula' => 'required',
            'nota1' => 'required',
            'nota2' => 'required',
            'data_certificado' => 'required',
            'identificador_certificado' => 'required',
        ));

        $this->objRegistration
            ->where(['id' => $id])
            ->update([
                'id_curso' => $request->id_curso,
                'id_aluno' => $request->id_aluno,
                'id_instrutor' => $request->id_instrutor,
                'data_matricula' => $request->data_matricula,
                'nota1' => $request->nota1,
                'nota2' => $request->nota2,
                'data_certificado' => $request->data_certificado,
                'identificador_certificado' => $request->identificador_certificado,
            ]);

            return redirect('/registration');
    }

    public function destroy($id)
    {
        $this->objRegistration->destroy($id);
        return redirect('/registration');
    }
}
