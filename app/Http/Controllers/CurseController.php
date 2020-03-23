<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelCurse;

class CurseController extends Controller
{
    
    private $objCurse;

    public function __construct()
    {
        $this->objCurse = new ModelCurse();
    }

    public function index()
    {   
        $curse = $this->objCurse->paginate(5);
        return view('curse.index', compact('curse'));
    }

    public function create()
    {
        return view('curse.create');
    }

    public function store(Request $request)
    {   
        $this->validate($request, array(
            'nome_curso' => 'required',
            'carga_horaria' => 'required',
            'ementa_curso' => 'unique:curses,ementa_curso',
        ));

        $curse = $this->objCurse->create([
            'nome_curso' => $request->nome_curso,
            'carga_horaria' => $request->carga_horaria,
            'ementa_curso' => $request->ementa_curso,
        ]);

        if ($curse) { 
            return redirect('/curse');
        }
    }

    public function show($id)
    {   
        $curse = $this->objCurse->find($id);
        return view('curse.show', compact('curse'));
    }

    public function edit($id)
    {
        $curse = $this->objCurse->find($id);
        return view('curse.create', compact('curse'));
    }

    public function update(Request $request, $id)
    {   
        $this->validate($request, array(
            'nome_curso' => 'required',
            'carga_horaria' => 'required',
            'ementa_curso' => 'required',
        ));

        $this->objCurse
            ->where(['id' => $id])
            ->update([
                'nome_curso' => $request->nome_curso,
                'carga_horaria' => $request->carga_horaria,
                'ementa_curso' => $request->ementa_curso,
            ]);

            return redirect('/curse');
    }

    public function destroy($id)
    {
        $this->objCurse->destroy($id);
        return redirect('/curse');
    }
}
