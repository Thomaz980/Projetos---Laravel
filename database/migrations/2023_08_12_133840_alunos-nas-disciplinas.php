<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aluno_disciplinas', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno_disciplinas');
    }
};

/*

CREATE TABLE `aluno_disciplinas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aluno_id` int NOT NULL,
  `disciplina_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aluno_id` (`aluno_id`),
  KEY `disciplina_id` (`disciplina_id`),
  CONSTRAINT `aluno_disciplinas_ibfk_1` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`),
  CONSTRAINT `aluno_disciplinas_ibfk_2` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`)

*/
