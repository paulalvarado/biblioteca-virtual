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
        Schema::create('libro_genero', function (Blueprint $table) {
            $table->id('id_libro_genero');
            $table->unsignedBigInteger('id_libro');
            $table->unsignedBigInteger('id_genero');
            $table->timestamps();

            $table->foreign('id_libro')->references('id_libro')->on('libros');
            $table->foreign('id_genero')->references('id_genero')->on('generos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro_genero');
    }
};
