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
        Schema::create('candidatos', function (Blueprint $table)
        {
            $table -> id();
            $table -> string('nome', 25);
            $table -> string('sobrenome', 25);
            $table -> string('email', 50);
            $table -> string('telefone', 15);
            // tamestamp
            $table -> timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('candidatos');
    }
};
