@extends('app')
@section('titulo','Lista de Clientes')
@section('conteudo')
<table class="table">
    <h1>Lista de Clientes</h1>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <th scope="row">{{ $client->id }}</th>
            <td><a href="{{ route('clients.show', $client) }}">{{ $client->nome}}</a></td>
            <td>{{$client->endereco }}</td>
            <td>
                <td><a class="btn btn-primary" href="{{ route('clients.edit', $client) }}">Atualizar</a> </td>
                <td>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                    </form>
                </td>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-success" href="{{ route('clients.create') }}">Novo Cliente</a>
@endsection