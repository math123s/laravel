<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Professor extends Controller
{
    function show () {
         $professores = [
            (object) ['nome' => 'Carlos da pedra', 'telefone' => '15 99604-9235']
            (object) ['nome' => 'Luiz Fumaça', 'telefone' => '15 99610-9325']
         ];
         return view ('professor', compact('professores'));
    }
}
