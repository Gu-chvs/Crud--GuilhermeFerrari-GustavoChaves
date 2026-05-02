@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

    <div class="row">
        <div class="col s12">

            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h4 class="deep-orange-text darken-2" style="margin: 0;">
                    <i class="material-icons medium" style="vertical-align: middle;">school</i>
                    Lista de Cursos
                </h4>
                <a href="{{ route('admin.cursos.adicionar') }}" class="btn deep-orange darken-2 waves-effect waves-light">
                    <i class="material-icons left">add</i>Novo Curso
                </a>
            </div>

            @if(session('sucesso'))
                <div class="alert-success">
                    <i class="material-icons tiny">check_circle</i>
                    {{ session('sucesso') }}
                </div>
            @endif

            <div class="card">
                <div class="card-content" style="padding: 0;">
                    <table class="striped responsive-table highlight">
                        <thead>
                            <tr class="deep-orange darken-2 white-text">
                                <th>#</th>
                                <th>Título</th>
                                <th>Descrição</th>
                                <th>Imagem</th>
                                <th>Valor (R$)</th>
                                <th>Publicado</th>
                                <th style="text-align:center;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($rows as $curso)
                            <tr>
                                <td>{{ $curso->id }}</td>
                                <td><strong>{{ $curso->titulo }}</strong></td>
                                <td>{{ Str::limit($curso->descricao, 40) }}</td>
                                <td>{{ $curso->imagem }}</td>
                                <td>{{ number_format($curso->valor, 2, ',', '.') }}</td>
                                <td>
                                    @if($curso->publicado === 'sim')
                                        <span class="new badge green" data-badge-caption="Sim"></span>
                                    @else
                                        <span class="new badge red" data-badge-caption="Não"></span>
                                    @endif
                                </td>
                                <td style="text-align:center; white-space:nowrap;">
                                    <a href="{{ route('admin.cursos.editar', $curso->id) }}"
                                       class="btn-small blue waves-effect waves-light tooltipped"
                                       data-position="top" data-tooltip="Editar">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="{{ route('admin.cursos.excluir', $curso->id) }}"
                                       class="btn-small red waves-effect waves-light tooltipped"
                                       data-position="top" data-tooltip="Excluir"
                                       onclick="return confirm('Confirma exclusão do curso?')">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" style="text-align:center; padding: 30px; color: #9e9e9e;">
                                    <i class="material-icons large">inbox</i><br>
                                    Nenhum curso cadastrado ainda.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

@endsection
