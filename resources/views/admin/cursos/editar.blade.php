@extends('layout.site')

@section('titulo', 'Editar Curso')

@section('conteudo')

    <div class="row">
        <div class="col s12 m8 offset-m2">

            <div style="display: flex; align-items: center; margin-bottom: 20px;">
                <a href="{{ route('admin.cursos') }}" class="btn-flat waves-effect">
                    <i class="material-icons">arrow_back</i>
                </a>
                <h4 class="deep-orange-text darken-2" style="margin: 0 0 0 8px;">Editar Curso</h4>
            </div>

            <div class="card">
                <div class="card-content">

                    @if($errors->any())
                        <div style="background:#ffebee; border-left:4px solid #f44336; padding:10px 16px; margin-bottom:16px; border-radius:4px; color:#c62828;">
                            <ul style="margin:0; padding-left:16px;">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.cursos.atualizar', $curso->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">title</i>
                                <input id="titulo" name="titulo" type="text"
                                       value="{{ old('titulo', $curso->titulo) }}" class="validate" required>
                                <label for="titulo" class="active">Título do Curso</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">description</i>
                                <textarea id="descricao" name="descricao"
                                          class="materialize-textarea validate" required>{{ old('descricao', $curso->descricao) }}</textarea>
                                <label for="descricao" class="active">Descrição</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">image</i>
                                <input id="imagem" name="imagem" type="text"
                                       value="{{ old('imagem', $curso->imagem) }}" class="validate" required>
                                <label for="imagem" class="active">Imagem (nome do arquivo)</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">attach_money</i>
                                <input id="valor" name="valor" type="number" step="0.01" min="0"
                                       value="{{ old('valor', $curso->valor) }}" class="validate" required>
                                <label for="valor" class="active">Valor (R$)</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <i class="material-icons prefix">public</i>
                                <select id="publicado" name="publicado" required>
                                    <option value="sim"  {{ old('publicado', $curso->publicado) === 'sim'  ? 'selected' : '' }}>Sim</option>
                                    <option value="não"  {{ old('publicado', $curso->publicado) === 'não'  ? 'selected' : '' }}>Não</option>
                                </select>
                                <label for="publicado" class="active">Publicado?</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12" style="text-align:right;">
                                <a href="{{ route('admin.cursos') }}" class="btn grey waves-effect waves-light" style="margin-right:8px;">
                                    Cancelar
                                </a>
                                <button type="submit" class="btn deep-orange darken-2 waves-effect waves-light">
                                    <i class="material-icons left">save</i>Atualizar
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
