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
        Schema::table('sig', function (Blueprint $table) {
            $table->enum('categoria', ['Story Maps', 'Mapa Web', 'Aplicacion Web', 'Dashboard', 'App Movil', 'Ortofoto', 'Modelo 3D', 'colecciones'])
            ->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sig', function (Blueprint $table) {
            //
        });
    }
};
