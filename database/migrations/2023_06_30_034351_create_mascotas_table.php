<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id('mascota_id');
            $table->string('mascota_nombre',45);
            $table->enum('estado',['En Adopcion','Adoptado','En tratamiento'])->default('En Adopcion');
            $table->string('tipo',45)->nullable();
            $table->string('raza',45)->nullable();
            $table->integer('mascota_edad')->nullable();
            $table->date('fecha_recojo')->nullable();
            $table->string('mascota_imagen',500)->nullable();
            $table->mediumText('mascota_descripcion')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
