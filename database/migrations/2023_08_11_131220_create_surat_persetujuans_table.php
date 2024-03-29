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
        Schema::create('surat_persetujuans', function (Blueprint $table) {
            $table->id();
            // $table->string('kd_customer');
            $table->unsignedBigInteger('data_customers_id');
            $table->foreign('data_customers_id')->references('id')->on('data_customers');
            
            $table->string('nama');
            $table->text('detail');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_persetujuans');
    }
};
