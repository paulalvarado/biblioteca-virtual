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
        Schema::create('renta_libros', function (Blueprint $table) {
            $table->id('id_renta');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_libro');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->decimal('costo_diario', 10, 2);
            $table->tinyInteger('estado');
            $table->timestamps();

            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_libro')->references('id_libro')->on('libros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renta_libros');
    }
};
