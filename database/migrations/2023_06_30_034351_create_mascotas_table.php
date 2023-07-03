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
            $table->enum('estado',['En Adopción','Adoptado','En tratamiento']);
            $table->string('tipo',45)->nullable();
            $table->string('raza',45)->nullable();
            $table->string('mascota_edad',4)->nullable();
            $table->dateTime('fecha_recojo')->nullable();
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
