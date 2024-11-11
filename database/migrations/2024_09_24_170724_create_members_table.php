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
        Schema::create('members', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('business_id')->constrained('business_fields');
            $table->string('nama');
            $table->string('kampung');
            $table->string('rt');
            $table->string('rw');
            $table->string('nib_sku')->nullable();
            $table->string('telepon')->unique();
            $table->enum('status', ['Aktif', 'Tidak aktif']);
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
