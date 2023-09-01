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
            $table->unsignedBigInteger('id_editorial');
            $table->date('fecha_publicacion');
            $table->text('imagen_portada')->nullable();
            $table->text('descripcion')->nullable();
            $table->decimal('precio', 8, 2);
            $table->decimal('precio_renta', 8, 2);
            $table->integer('stock');
            $table->integer('stock_renta');
            // default: 1 activo, 0 inactivo
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();

            $table->foreign('id_autor')->references('id_autor')->on('autores');
            $table->foreign('id_editorial')->references('id_editorial')->on('editoriales');
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
