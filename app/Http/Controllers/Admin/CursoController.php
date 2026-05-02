<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Listagem
    public function index()
    {
        $rows = Curso::all();
        return view('admin.cursos.index', compact('rows'));
    }

    // Formulário de adição
    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }

    // Salva novo curso
    public function salvar(Request $request)
    {
        $request->validate([
            'titulo'    => 'required|max:255',
            'descricao' => 'required',
            'imagem'    => 'required',
            'valor'     => 'required|numeric',
            'publicado' => 'required|in:sim,não',
        ]);

        Curso::create($request->only(['titulo', 'descricao', 'imagem', 'valor', 'publicado']));

        return redirect()->route('admin.cursos')->with('sucesso', 'Curso cadastrado com sucesso!');
    }

    // Formulário de edição
    public function editar($id)
    {
        $curso = Curso::findOrFail($id);
        return view('admin.cursos.editar', compact('curso'));
    }

    // Atualiza curso existente
    public function atualizar(Request $request, $id)
    {
        $request->validate([
            'titulo'    => 'required|max:255',
            'descricao' => 'required',
            'imagem'    => 'required',
            'valor'     => 'required|numeric',
            'publicado' => 'required|in:sim,não',
        ]);

        $curso = Curso::findOrFail($id);
        $curso->update($request->only(['titulo', 'descricao', 'imagem', 'valor', 'publicado']));

        return redirect()->route('admin.cursos')->with('sucesso', 'Curso atualizado com sucesso!');
    }

    // Exclui curso
    public function excluir($id)
    {
        $curso = Curso::findOrFail($id);
        $curso->delete();

        return redirect()->route('admin.cursos')->with('sucesso', 'Curso excluído com sucesso!');
    }
}
