<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id('solicitud_id');

            $table->unsignedBigInteger('usuario')->unsigned();
            $table->foreign('usuario')
                  ->references('id')
                  ->on('users');
            
            $table->unsignedBigInteger('mascota')->unsigned();
            $table->foreign('mascota')
                  ->references('mascota_id')
                  ->on('mascotas');

            $table->unsignedBigInteger('administrador')->unsigned();
            $table->foreign('administrador')
                  ->references('admin_id')
                  ->on('administradores');

            $table->string('dni',8);
            $table->dateTime('fecha_envio');
            $table->string('direccion',60);
            $table->string('comprobante_domicilio',250);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};