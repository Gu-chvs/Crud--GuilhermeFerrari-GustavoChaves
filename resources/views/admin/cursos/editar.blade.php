@extends('layout.site')

@section('titulo','Editar Curso')

@section('conteudo')

<div class="container">

    <h3 class="center">Editar Curso</h3>

    <div class="row">

        <form
        action="{{ route('admin.cursos.atualizar', $linha->id) }}"
        method="post"
        enctype="multipart/form-data">

            {{ csrf_field() }}

            <input type="hidden" name="_method" value="put">

            @include('admin.cursos._form')

            <button class="btn blue">
                Atualizar
            </button>

        </form>

    </div>

</div>

@endsection