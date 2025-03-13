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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->uuid('id')-> primary();
            $table->foreignId('rute_id')->constrained();
            $table->foreignId('kendaraan_id')->constrained();
            $table->foreignId('sopir_id')->constrained();
            $table->dateTime('tanggal_berangkat');
            $table->dateTime('tanggal_tiba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
