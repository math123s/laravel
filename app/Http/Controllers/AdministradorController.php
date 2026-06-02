<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    function index () {
        return view('administrador.index');
    }

    function adicionar (Request $dados) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador::create($dados->all());

        //Recuperando todos os administradors do banco e enviando para A View

        $administrador = new \App\Models\AdministradorModel();

        return view('administrador.index', ['sucesso'=>'Cadastrado!', 'administradores' =>$administradores::all()]);
    
    }
}
