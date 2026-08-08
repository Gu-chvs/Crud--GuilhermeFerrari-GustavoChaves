<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('celular');
            $table->string('imagem');
            $table->integer('id_curso')->unsigned(); // Chave estrangeira
            $table->foreign('id_curso')->references('id')->on('cursos'); // Relação com cursos
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
