@extends('app')

@section('titulo','Detalhes do Cliente')
@section('conteudo')
<div class="card">
    <div class="card-header">
        Detalhes do Cliente {{ $client->nome }}
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $client->id }}</p>
        <p><strong>Nome:</strong> {{ $client->nome }}</p>
        <p><strong>Endereço:</strong> {{ $client->endereco }}</p>
        <p><strong>Observação:</strong> {{ $client->observacao }}</p>
        <p><a href="{{ route('clients.index') }}" class="btn btn-success">Voltar Para Listagem</a></p>
    </div>
</div>
@endsection