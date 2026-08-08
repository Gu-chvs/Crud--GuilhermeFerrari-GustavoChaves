<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aluno; 

class alunoController extends Controller
{
    public function index() {
        $rows = Aluno::all();
        return view('admin.alunos.index', compact('rows'));
    }

    public function adicionar() {
        return view('admin.alunos.adicionar');
    }

    public function salvar(Request $req) {
        $dados = $req->all();

        if($req->hasFile('arquivo')){
            $imagem = $req->file('arquivo');
            $num = rand(1111,9999);
            $dir = "img/alunos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Aluno::create($dados);
        return redirect()->route('admin.alunos');
    }

    public function editar($id) {
        $linha = Aluno::find($id);
        return view('admin.alunos.editar', compact('linha'));
    }

    public function atualizar(Request $req, $id) {
        $dados = $req->all();

        if($req->hasFile('arquivo')){
            $imagem = $req->file('arquivo');
            $num = rand(1111,9999);
            $dir = "img/alunos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }

        Aluno::find($id)->update($dados);
        return redirect()->route('admin.alunos');
    }

    public function excluir($id) {
        Aluno::find($id)->delete();
        return redirect()->route('admin.alunos');
    }
}
