<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CursoController;

Route::get('/', function () {
    return redirect()->route('admin.cursos');
});

// CRUD de Cursos
Route::get('/admin/cursos',
    ['as' => 'admin.cursos',
     'uses' => CursoController::class . '@index']);

Route::get('/admin/cursos/adicionar',
    ['as' => 'admin.cursos.adicionar',
     'uses' => CursoController::class . '@adicionar']);

Route::post('/admin/cursos/salvar',
    ['as' => 'admin.cursos.salvar',
     'uses' => CursoController::class . '@salvar']);

Route::get('/admin/cursos/editar/{id}',
    ['as' => 'admin.cursos.editar',
     'uses' => CursoController::class . '@editar']);

Route::put('/admin/cursos/atualizar/{id}',
    ['as' => 'admin.cursos.atualizar',
     'uses' => CursoController::class . '@atualizar']);

Route::get('/admin/cursos/excluir/{id}',
    ['as' => 'admin.cursos.excluir',
     'uses' => CursoController::class . '@excluir']);
