<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('veterinarios', function (Blueprint $table) {
            $table->id('veterinario_id');
            $table->string('nombre',35);
            $table->string('apellido',35);
            $table->string('dni',8);
            $table->string('correo')->unique();
            $table->string('contrasena');
            $table->string('celular',15);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('veterinarios');
    }
};
