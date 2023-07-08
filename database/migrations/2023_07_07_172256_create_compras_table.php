<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id('compra_id');
            
            $table->unsignedBigInteger('detalles_compra')->unique();
            $table->foreign('detalles_compra')
                  ->references('detalles_compra_id')
                  ->on('detalles_compra');
            
            $table->unsignedBigInteger('usuario');
            $table->foreign('usuario')
                  ->references('id')
                  ->on('users');
            
            $table->unsignedBigInteger('metodo_pago');
            $table->foreign('metodo_pago')
                  ->references('metodo_id')
                  ->on('metodos_pago');

            $table->integer('monto_total');
            $table->string('compra_direccion', 250);
            $table->timestamps();
        });
    }
    
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};