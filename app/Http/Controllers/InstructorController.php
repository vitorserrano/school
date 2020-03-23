<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelInstructor;

class InstructorController extends Controller
{

    private $objInstructor;

    public function __construct()
    {
        $this->objInstructor = new ModelInstructor();
    }

    public function index()
    {
        $instructor = $this->objInstructor->paginate(5);
        return view('instructor.index', compact('instructor'));
    }

    public function create()
    {
        return view('instructor.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'nome_instrutor' => 'required',
            'cpf' => 'required|size:11|unique:instructors,cpf',
            'rg' => 'unique:instructors,rg',
            'fone_celular' => 'required|size:11|unique:instructors,fone_celular',
            'email_instrutor' => 'required|unique:instructors,email_instrutor',
        ));

        $instructor = $this->objInstructor->create([
            'nome_instrutor' => $request->nome_instrutor,
            'fone_celular' => $request->fone_celular,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'email_instrutor' => $request->email_instrutor,
            'data_nascimento' => $request->data_nascimento,
            'mini_curriculum' => $request->mini_curriculum,
        ]);

        if ($instructor) {
            return redirect('/instructor');
        }
    }

    public function show($id)
    {
        $instructor = $this->objInstructor->find($id);
        return view('instructor.show', compact('instructor'));
    }

    public function edit($id)
    {
        $instructor = $this->objInstructor->find($id);
        return view('instructor.create', compact('instructor'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'nome_instrutor' => 'required',
            'cpf' => "required|size:11|unique:instructors,cpf,$id",
            'rg' => "unique:instructors,rg,$id",
            'fone_celular' => "required|size:11|unique:instructors,fone_celular,$id",
            'email_instrutor' => "required|unique:instructors,email_instrutor,$id",
        ));

        $this->objInstructor
            ->where(['id' => $id])
            ->update([
                'nome_instrutor' => $request->nome_instrutor,
                'fone_celular' => $request->fone_celular,
                'cpf' => $request->cpf,
                'rg' => $request->rg,
                'email_instrutor' => $request->email_instrutor,
                'data_nascimento' => $request->data_nascimento,
                'mini_curriculum' => $request->mini_curriculum,
            ]);

        return redirect('/instructor');
    }

    public function destroy($id)
    {
        $this->objInstructor->destroy($id);
        return redirect('/instructor');
    }
}
