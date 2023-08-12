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
        Schema::create('notas', function (Blueprint $table) {
            $table->string('no_nota')->primary();
            // $table->string('kd_pesanan');
            $table->string('kd_pesanan');
            $table->foreign('kd_pesanan')->references('kd_pesanan')->on('data_pesanans');

            $table->string('nama');
            $table->text('detail');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
