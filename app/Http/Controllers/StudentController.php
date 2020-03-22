<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\ModelStudent;

class StudentController extends Controller
{
    
    private $objStudent;

    public function __construct()
    {
        $this->objStudent = new ModelStudent();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $student = $this->objStudent->all();
        return view('student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $student = $this->objStudent->create([
            'nome_aluno' => $request->nome_aluno,
            'fone_celular' => $request->fone_celular,
            'cpf' => $request->cpf,
            'rg' => $request->rg,
            'email_aluno' => $request->email_aluno,
            'data_nascimento' => $request->data_nascimento,
        ]);

        if ($student) {
            $request->session()->flash(
                'mensagem',
                "ALuno cadastrado com sucesso!"
            );

        return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $student = $this->objStudent->find($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
