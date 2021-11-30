<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    
    public function __invoke($nome = 'Marcelo')
    {
        return view('saudacao')->with('nome',$nome);
    }
}
