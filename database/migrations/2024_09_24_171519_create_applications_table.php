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
        Schema::create('applications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nama_aplikasi');
            $table->string('keyword');
            $table->text('deskripsi');
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            $table->string('telepon');
            $table->string('email');
            $table->text('alamat');
            $table->text('google_maps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
