<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index () {
        return view('aluno.index');
    }

    function adicionar (Request $dados) {
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());

        //Recuperando todos os alunos do banco e enviando para A View

        $aluno = new \App\Models\AlunoModel();

        return view('aluno.index', ['sucesso'=>'Cadastrado!', 'alunos' =>$aluno::all()]);
    
    }
    
    function remove(string $id) {
        $aluno = new \App\Models\AlunoModel();
        $aluno::destroy($id);

        return view('aluno.index', ['success'=>'Removido!', 'alunos'=>$aluno::all()]);

    }

    function atualizar(string $id) {
        $aluno = new \App\Models\AlunoModel();
        $aluno = $aluno::find($id);

        return view('aluno.atualizar', ['aluno'=>$aluno]);
    }

}
