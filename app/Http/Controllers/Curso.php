<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Curso extends Controller
{
    function show() {
        $cursos = [
            (object) ['nome' => 'Análise e Desenvolvimento de Sistemas', 'horario' => 'das 14:30 ás 16:30' ],
            (object) ['nome' => 'Mécatronica', 'horario' => 'das 20:30 ás 22:30']
        ];

        return view ('curso', compact('cursos'));
    }
}
