<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponenteController extends Controller
{
    function index () {
        return view('componente.index');
    }

    function adicionar (Request $dados) {
        $componente = new \App\Models\ComponenteModel();
        $componente::create($dados->all());

        //Recuperando todos os componentes do banco e enviando para A View

        $componente = new \App\Models\ComponenteModel();

        return view('componente.index', ['sucesso'=>'Cadastrado!', 'componentes' =>$componentes::all()]);
    
    }
}
