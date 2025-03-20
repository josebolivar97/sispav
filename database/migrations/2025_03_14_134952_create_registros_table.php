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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string('institucion', 150);
            $table->string('nom_reconocimiento', 75);
            $table->string('pdf_reconocimiento', 1025)->nullable();
            $table->foreignId('id_participante')
                ->constrained('participantes')
                ->restrictOnDelete()
                ->restrictOnUpdate();
            $table->foreignId('id_evento')
                ->constrained('eventos')
                ->restrictOnDelete()
                ->restrictOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
