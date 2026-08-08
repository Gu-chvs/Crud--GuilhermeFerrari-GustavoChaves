@extends('layout.site')

@section('titulo','Lista de Alunos')

@section('conteudo')
<div class='container'>
    <h3 class='center'>Lista de Alunos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Celular</td>
                    <td>ID Curso</td>
                    <td>Imagem</td>
                    <td>Ação</td>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->nome }}</td>
                    <td>{{ $row->celular }}</td>
                    <td>{{ $row->id_curso }}</td>
                    <td><img width="90" src="{{ asset($row->imagem) }}" alt="{{ $row->nome }}"></td>
                    <td>
                        <a class='btn deep-orange' href="{{ route('admin.alunos.editar', $row->id) }}">Alterar</a>
                        <a class='btn red' href="{{ route('admin.alunos.excluir', $row->id) }}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class='row'>
        <a class='btn blue' href="{{ route('admin.alunos.adicionar') }}">Adicionar Aluno</a>
    </div>
</div>
@endsection