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
        Schema::create('campo_formularios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formulario_id')->constrained()->onDelete('cascade');
            $table->string('label');
            $table->string('tipo'); // texto, número, checkbox, etc.
            $table->boolean('obrigatorio')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campo_formularios');
    }
};
