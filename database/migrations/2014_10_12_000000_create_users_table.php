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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->text('alamat');
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('role', [
                'admin',
                'marketing'
            ]);
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // Schema::create('users', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->enum('role', [
        //         'customer',
        //         'marketing',
        //         'admin_gudang',
        //         'supplier',
        //         'direktur',
        //     ])->default('customer');
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
