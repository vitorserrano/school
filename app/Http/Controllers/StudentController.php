<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelStudent;

class StudentController extends Controller
{
    
    private $objStudent;

    public function __construct()
    {
        $this->objStudent = new ModelStudent();
    }

    public function index()
    {   
        $student = $this->objStudent->paginate(5);
        return view('student.index', compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {   
        $this->validate($request, array(
            'nome_aluno' => 'required',
            'cpf' => 'required|size:11|unique:students,cpf',
            'rg' => 'unique:students,rg',
            'fone_celular' => 'required|size:11|unique:students,fone_celular',
            'email_aluno' => 'required|unique:students,email_aluno',
        ));

        $student = $this->objStudent->create([
            'nome_aluno' => $request->nome_aluno,
            'fone_celular' => $request->fone_celular,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'email_aluno' => $request->email_aluno,
            'data_nascimento' => $request->data_nascimento,
        ]);

        if ($student) { 
            return redirect('/student');
        }
    }

    public function show($id)
    {   
        $student = $this->objStudent->find($id);
        return view('student.show', compact('student'));
    }

    public function edit($id)
    {
        $student = $this->objStudent->find($id);
        return view('student.create', compact('student'));
    }

    public function update(Request $request, $id)
    {   
        $this->validate($request, array(
            'nome_aluno' => 'required',
            'cpf' => "required|size:11|unique:students,cpf,$id",
            'rg' => "unique:students,rg,$id",
            'fone_celular' => "required|size:11|unique:students,fone_celular,$id",
            'email_aluno' => "required|unique:students,email_aluno,$id",
        ));

        $this->objStudent
            ->where(['id' => $id])
            ->update([
                'nome_aluno' => $request->nome_aluno,
                'fone_celular' => $request->fone_celular,
                'cpf' => $request->cpf,
                'rg' => $request->rg,
                'email_aluno' => $request->email_aluno,
                'data_nascimento' => $request->data_nascimento,
            ]);

            return redirect('/student');
    }

    public function destroy($id)
    {
        $this->objStudent->destroy($id);
        return redirect('/student');
    }
}
