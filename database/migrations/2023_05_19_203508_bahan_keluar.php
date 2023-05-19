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
        Schema::create('bahan_keluar', function (Blueprint $table) {
            $table->id();
            $table->string('untuk_produk');
            $table->string('no_bets')->unique();
            $table->bigInteger('jumlah');
            $table->bigInteger('sisa');
            $table->binary('paraf'); // blob
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bahan_keluar');
    }
};
