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
        Schema::create('data_pesanans', function (Blueprint $table) {
            $table->id();
            // $table->string('kd_barang');
            // $table->string('kd_customer');
            // $table->string('kd_supplier');
            // $table->foreign('kd_supplier')->references('kd_supplier')->on('data_suppliers');
            // $table->string('kd_barang');
            // $table->foreign('kd_barang')->references('kd_barang')->on('data_barangs');
            $table->unsignedBigInteger('data_customers_id');
            $table->foreign('data_customers_id')->references('id')->on('data_customers');

            $table->string('nama');
            $table->string('status');
            $table->text('detail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pesanans');
    }
};
