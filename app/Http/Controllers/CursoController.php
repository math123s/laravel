<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    function index(){
        return view('curso.index');
    }

    function adicionar(Request $dados ) {
        $curso = new \App\Models\CursoModel();
        $curso::create($dados->all());



        
        $curso = new \App\Models\CursoModel();

        return view('curso.index', ['sucesso'=>'Cadastrado!', 'curso' =>$curso::all()]);
    
    }


    function remove(string $id) {
        $curso = new \App\Models\CursoModel();
        $curso::destroy($id);

        return view('curso.index', ['success'=>'Removido!', 'curso'=>$curso::all()]);

    }

    function atualizar(string $id) {
        $curso = new \App\Models\CursoModel();
        $curso = $curso::find($id);

        return view('curso.atualizar', ['curso'=>$curso]);
    }
}
