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
        Schema::create('actividad_tareas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_actividad')->constrained('actividads', 'id_actividad')->onDelete('cascade');
            $table->foreignId('id_tarea')->constrained('tareas', 'id_tarea')->onDelete('cascade');
            $table->foreignId('id_estado')->constrained('estados', 'id_estado')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividad_tareas');
    }
};
