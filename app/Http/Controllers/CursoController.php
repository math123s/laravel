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



        
        $curso = new \App\Models\cursoModel();

        return view('curso.index', ['sucesso'=>'Cadastrado!', 'curso' =>$curso::all()]);
    
    }
}
