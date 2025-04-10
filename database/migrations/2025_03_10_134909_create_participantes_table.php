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
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 8);
            $table->string('nombres', 50);
            $table->string('apellido_paterno', 100);
            $table->string('apellido_materno', 100);
            $table->date('f_nacimiento');
            $table->string('departamento', 50);
            $table->string('provincia', 50);
            $table->string('distrito', 50);
            $table->string('profesion', 50);
            $table->string('l_residencia', 50);
            $table->string('organizacion', 50);
            $table->string('email', 70);
            $table->string('celular', 50);
            $table->foreignId('id_comision')
                ->constrained('comisions')
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
        Schema::dropIfExists('participantes');
    }
};
