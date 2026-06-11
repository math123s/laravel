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
        return view('professor.index', ['success'=>'Cadastrado!', 'professores'=>$professores::all()]);
    }

    function remove(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor::destroy($id);

        return view('professor.index', ['success'=>'Removido!', 'professores'=>$professor::all()]);

    }

    function atualizar(string $id) {
        $professor = new \App\Models\ProfessorModel();
        $professor = $professor::find($id);

        return view('professor.atualizar', ['professor'=>$professor]);
    }

}