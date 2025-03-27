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
        Schema::create('loaiSP', function (Blueprint $table) {
            $table->id();
            $table->string('ten_loai', 30)->unique();
            $table->unsignedInteger('thu_tu')->default(0);
            $table->boolean('an_hien')->default(1);
            $table->string('url_hinh', 200)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loaiSP');
    }
};
