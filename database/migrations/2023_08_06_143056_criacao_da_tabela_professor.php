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
        Schema::create('professor', function(Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->string('matricula');
            $table->string('email');
            $table->string('senha');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('sexo');
            $table->string('data_nascimento');
            $table->string('imagem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExist('professor');
    }
};
