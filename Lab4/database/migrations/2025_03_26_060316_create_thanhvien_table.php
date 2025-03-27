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
        Schema::create('thanhvien', function (Blueprint $table) {
            $table->id();
            $table->string('hoTen', 100);
            $table->string('password', 100);
            $table->string('email', 200)->unique(); // Thêm unique để tránh email trùng lặp
            $table->string('randomKey', 100)->nullable();
            $table->boolean('active')->default(0);
            $table->unsignedBigInteger('idGroup')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thanhvien');
    }
};
