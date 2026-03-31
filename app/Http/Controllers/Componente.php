<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Componente extends Controller
{
    function show() {
        $componentes = [
            (object) ['nome' => 'Desing Digital', 'horario' => '16:30 ás 21:30'],
            (object) ['nome' => 'Marketin', 'horario' => '16:30 ás 21:30'],
            
        ];
        return view ('componente', compact('componentes'));
    }
}
