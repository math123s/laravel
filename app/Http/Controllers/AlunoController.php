<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    function index(){
        return view('aluno.index');
    }

    function add(Request $dados) {
        dd($dados->all());
        $aluno = new \App\Models\AlunoModel();
        $aluno::create($dados->all());


        //recuperando Todos os alunos do banco de dados  e enviando para  a view

        $alunos = new \App\Models\AlunoMode();
        //testar dps
        return view('aluno.index', ['sucess' => 'Cadastrado!', 'alunos' =>$alunos::all()]);
    }
}
