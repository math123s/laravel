<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    function index() {
            return view('professor.index');
    }

    function adicionar(Request $dados ) {
            $professor = new \App\Models\ProfessorModel;
            $professor::create($dados->all());
            
            $professor = new \App\Models\ProfessorModel();
        
        //     return view('professor.index', ['sucesso'=>'Cadastrado!', 'professores' =>$professores::all()]);
    }


}
