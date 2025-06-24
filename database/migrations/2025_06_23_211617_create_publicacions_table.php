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
        Schema::create('publicacions', function (Blueprint $table) {
            $table->id('id_publicacion');
            $table->foreignId('id_proyecto')->constrained('proyectos', 'id_proyecto')->onDelete('cascade');
            $table->string('titulo');
            $table->text('contenido')->nullable();
            $table->string('plataforma')->nullable(); // ej: Instagram, Facebook, etc.
            $table->string('imagen')->nullable();
            $table->timestamp('fecha_publicacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacions');
    }
};
