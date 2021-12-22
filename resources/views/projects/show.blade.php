@extends('app')

@section('titulo', 'Detalhes do Projeto')
@section('conteudo')
    <div class="card">
        <div class="card-header">
            <h5>Detalhes do Projeto {{ $project->nome }}</h5>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $project->id }}</p>
            <p><strong>Nome:</strong> {{ $project->nome }}</p>
            <p><strong>Cliente</strong> {{ $project->client->nome }}</p>

        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Funcionarios que trabalham no projeto</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($project->employees as $employee)
                        <tr>
                            <th scope="row">{{ $employee->id }}</th>
                            <td>{{ $employee->nome }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <p><a href="{{ route('projects.index') }}" class="btn btn-success">Voltar Para Listagem</a></p>
@endsection
