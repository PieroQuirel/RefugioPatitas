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
        Schema::create('productos', function (Blueprint $table) {
            $table->id('producto_id');
            $table->string('producto_nombre');
            $table->integer('stock');
            $table->decimal('precio',2);
            $table->string('proveedor')->nullable();
            $table->enum('producto_estado',['Stock','Agotado'])->default('Stock');
            $table->string('imagen')->nullable();
            $table->mediumText('descripcion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
