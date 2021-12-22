@extends('app')
@section('titulo','Lista de Projetos')
@section('conteudo')
<table class="table">
    <h1>Lista de Projetos</h1>
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Cliente</th>
            {{-- <th scope="col">Ações</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
        <tr>
            <th scope="row">{{ $project->id }}</th>
            <td><a href="{{ route('projects.show', $project) }}">{{ $project->nome}}</a></td>
            <td>{{$project->client->nome }}</td>
            <td>
                <td><a class="btn btn-primary" href="{{ route('projects.edit', $project) }}">Atualizar</a> </td>
                <td>
                    <form action="{{ route('projects.destroy', $project) }}" method="POST">
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

<a class="btn btn-success" href="{{ route('projects.create') }}">Novo Projeto</a>
@endsection