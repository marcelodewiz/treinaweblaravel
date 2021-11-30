<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{

    /**
     * Lista os Clientes
     *
     * @return View
     */
    public function index(): View
    {
        $clients =  Client::get();
        return view('clients.index', [
            'clients' => $clients
        ]);
    }

    /**
     * Mostra um cliente especifico
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $client = Client::find($id);

        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Formulario de criação de clientes
     *
     * @return View
     */
    public function create():View
    {
        return view('clients.create');
    }

    /**
     * Persiste o cliente no banco
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $dados = $request->except('_token');
        Client::create($dados);

        return redirect('/clients');
    }

    /**
     * Exige o formulario de edição do cliente
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id) :View
    {
        $client = Client::find($id);

        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Atualiza o cliente no banco
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $client = Client::find($id);

        $client->update([
            'nome' => $request->nome,
            'endereco' => $request->endereco,
            'observacao' => $request->observacao
        ]);

        return redirect('/clients');
    }

    /**
     * Deleta o cliente no banco
     *
     * @param integer $id
     * @return RedirectResponse
     */
    public function destroy(int $id) :RedirectResponse
    {
        $client = Client::find($id);

        $client->delete();

        return redirect('/clients');
    }
}
