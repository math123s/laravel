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

    function remove(string $id) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador::destroy($id);

        return view('administrador.index', ['success'=>'Removido!', 'administradores'=>$administrador::all()]);

    }

    function save(Request $dados) {
        $administrador = new \App\Models\AdministradorModel();
        $administrador = $administrador::find($dados->id);
        $administrador->update($dados->all());

        return view('administrador.index', ['success'=>'Atualizado!', 'administradores'=>$administrador::all()]);
    }
}
