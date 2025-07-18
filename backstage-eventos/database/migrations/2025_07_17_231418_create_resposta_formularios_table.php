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
        Schema::create('resposta_formularios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formulario_id')->constrained()->onDelete('cascade');
            $table->json('respostas'); // armazenar como {campo_id: valor}
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resposta_formularios');
    }
};
