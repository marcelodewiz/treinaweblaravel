<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        return view('home');
    }

    public function sobre()
    {
    }

    public function contato()
    {
    }

    public function servico($id)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'Descricação muito longa'
            ],
            2 => [
                'nome' => 'Lavagem de Coberta',
                'descricao' => 'descrição muito longa'
            ],
            3 => [
                'nome' => 'Lavagem de Urso',
                'descricao' => 'descrição muito longa'
            ]
        ];
        return view('site.servico')->with('servico', $servicos[$id]);
    }

    public function servicos()
    {
    }
}
