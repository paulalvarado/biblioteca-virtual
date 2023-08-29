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
        Schema::create('libro_etiqueta', function (Blueprint $table) {
            $table->id('id_libro_etiqueta');
            $table->unsignedBigInteger('id_libro');
            $table->unsignedBigInteger('id_etiqueta');
            $table->timestamps();

            $table->foreign('id_libro')->references('id_libro')->on('libros');
            $table->foreign('id_etiqueta')->references('id_etiqueta')->on('etiquetas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro_etiqueta');
    }
};
