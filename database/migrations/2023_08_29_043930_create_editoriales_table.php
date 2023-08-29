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
        Schema::create('editoriales', function (Blueprint $table) {
            $table->id('id_editorial');
            $table->string('nombre_editorial', 255);
            $table->string('direccion', 255)->nullable();
            $table->string('telefono', 255)->nullable();
            $table->string('correo', 255)->nullable();
            $table->tinyInteger('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editoriales');
    }
};
