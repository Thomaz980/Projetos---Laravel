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
        // Schema::create('curso_disciplina', function(Blueprint $table){
        //     $table->id();
        //     $table->unsignedBigInteger('curso_id');
        //     $table->unsignedBigInteger('disciplina_id');
        //     $table->timestamps();

        //     $table->foreign('curso_id')->references('id')->on('curso');
        //     $table->foreign('disciplina_id')->references('id')->on('disdciplina');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExist('curso_disciplina');
    }
};

/*
  CREATE TABLE `curso_disciplinas` (
  `curso_id` int NOT NULL,
  `disciplina_id` int NOT NULL,
  PRIMARY KEY (`curso_id`,`disciplina_id`),
  KEY `disciplina_id` (`disciplina_id`),
  CONSTRAINT `curso_disciplinas_ibfk_1` FOREIGN KEY (`curso_id`) REFERENCES `curso` (`id`),
  CONSTRAINT `curso_disciplinas_ibfk_2` FOREIGN KEY (`disciplina_id`) REFERENCES `disciplina` (`id`)
)
*/
