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
        Schema::create('sig', function (Blueprint $table) {
            $table->id();
            $table->enum('categoria', ['Story Maps', 'Mapa Web', 'Aplicacion Web','Dashboard','App Movil','Ortofoto','Modelo 3D']);
            $table->string('titulo');
            $table->string('enlace')->nullable();
            $table->string('archivo')->nullable();
            $table->string('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sig');
    }
};
