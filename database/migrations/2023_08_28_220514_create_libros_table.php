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
        Schema::create('libros', function (Blueprint $table) {
            $table->id('id_libro');
            $table->string('nombre_libro', 255);
            $table->unsignedBigInteger('id_autor');
            $table->date('fecha_publicacion');
            $table->text('imagen_portada')->nullable();
            $table->text('descripcion')->nullable();
            // default: 1 activo, 0 inactivo
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();

            $table->foreign('id_autor')->references('id_autor')->on('autores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
