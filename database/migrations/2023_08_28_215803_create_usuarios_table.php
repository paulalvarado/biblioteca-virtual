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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('username', 255);
            $table->string('password');
            $table->string('correo', 255);
            $table->string('nombre', 255);
            $table->string('apellido', 255)->nullable();
            $table->unsignedBigInteger('id_rol');
            $table->tinyInteger('estado');
            $table->timestamps();

            $table->foreign('id_rol')->references('id_rol')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
