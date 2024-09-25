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
        Schema::create('umkm_members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama');
            $table->integer('usia');
            $table->string('jenis_usaha');
            $table->string('pendapatan');
            $table->string('pendapatan_tertinggi');
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umkm_members');
    }
};
