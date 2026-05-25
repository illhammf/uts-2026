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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->string('nama');
            $table->string('nim')->nullable();
            $table->string('kampus')->nullable();
            $table->string('prodi')->nullable();
            $table->string('semester')->nullable();

            $table->string('judul_profesi')->nullable();
            $table->text('bio_singkat')->nullable();
            $table->longText('deskripsi_tentang')->nullable();

            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('github')->nullable();
            $table->string('instagram')->nullable();

            $table->string('foto')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
