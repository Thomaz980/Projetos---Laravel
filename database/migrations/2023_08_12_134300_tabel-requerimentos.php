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
        Schema::create('requerimentos', function(Blueprint $table){
            $table->id();
            $table->string('nome', 100);
            $table->string('matricula', 20);
            $table->string('email', 100);
            $table->string('cpf', 14);
            $table->string('tipo_requerimento', 100);
            $table->text('observacoes');
            $table->string('status', 255)->default('pendente');
            $table->date('data_requerimento')->nullable();
            $table->time('hora_requerimento')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('requerimentos');
    }
};


/*
CREATE TABLE `requerimentos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `matricula` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `tipo_requerimento` varchar(100) NOT NULL,
  `observacoes` text,
  `status` varchar(255) DEFAULT 'pendente',
  `data_requerimento` date DEFAULT NULL,
  `hora_requerimento` time DEFAULT NULL,
  PRIMARY KEY (`id`)
)

*/
