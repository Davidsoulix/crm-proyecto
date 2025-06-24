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
        Schema::create('solicituds', function (Blueprint $table) {
            $table->id('id_solicitud');
            $table->text('descripcion')->nullable();
            $table->foreignId('id_cliente')->constrained('clientes', 'id_cliente')->onDelete('cascade');
            $table->foreignId('id_tipocliente')->constrained('tipo_clientes', 'id_tipocliente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicituds');
    }
};
