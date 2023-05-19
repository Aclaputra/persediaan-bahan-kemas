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
        Schema::create('bahan_masuk', function(Blueprint $table) {
            $table->id();
            $table->string('tgl');
            $table->string('no_lp');
            $table->string('nama_pemasok');
            $table->string('no_analisa');
            $table->bigInteger('jumlah');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_masuk');
    }
};
