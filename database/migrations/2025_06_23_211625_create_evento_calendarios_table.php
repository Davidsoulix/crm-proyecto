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
        Schema::create('evento_calendarios', function (Blueprint $table) {
            $table->id('id_evento');
            $table->foreignId('id_proyecto')->nullable()->constrained('proyectos', 'id_proyecto')->onDelete('set null');
            $table->string('titulo');
            $table->text('descripcion')->nullable();
            $table->timestamp('fecha_inicio');
            $table->timestamp('fecha_fin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evento_calendarios');
    }
};
