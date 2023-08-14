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
        Schema::create('data_barangs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_suppliers_id');
            $table->foreign('data_suppliers_id')
                ->references('id')->on('data_suppliers');
            // $table->foreign('kd_supplier')->references('kd_supplier')->on('data_suppliers');
            // $table->string('kd_supplier');
            $table->string('jenis');
            $table->enum('jalur', [
                'masuk',
                'keluar'
            ]);
            $table->string('nama');
            $table->string('harga');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_barangs');
    }
};
