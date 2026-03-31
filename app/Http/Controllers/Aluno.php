<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function show(){
        //Criar um array de objetos para aluno contendo nome, telefone  e email
        $alunos = [
            //add objeto anteas do array para se tornar um objeto
            (object) ['nome' => 'Diogo', 'telefone' => '123', 'email' => 'diogo@hotmail.com'],
            (object) ['nome' => 'Matheus', 'telefone' => '231', 'email' => 'matheusvpenteado12@gmail.com'],
            (object) ['nome' => 'Pedro', 'telefone' => '321', 'email' => 'maria_clara21@gmail.com']
        ]; //converte o array em objeto
        
        //ultilizando compact para view
        return view ('aluno', compact('alunos'));
        
    }
}

