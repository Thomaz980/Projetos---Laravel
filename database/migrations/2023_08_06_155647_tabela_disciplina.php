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
        Schema::create('disciplinas', function(Blueprint $table){
            $table->id();
            $table->string('codigo');
            $table->string('nome');
            $table->integer('carga_horaria_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('disciplinas');
    }
};

/*
    CREATE TABLE `disciplina` (
  `id` int NOT NULL AUTO_INCREMENT,
  `codigo` varchar(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `carga_horaria` int NOT NULL,
  PRIMARY KEY (`id`)
)
*/
