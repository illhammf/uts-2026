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
        Schema::create('projects', function (Blueprint $table) {

            $table->id();

            $table->string('judul');
            $table->string('slug')->unique();

            $table->text('deskripsi_singkat');
            $table->longText('analisis_masalah')->nullable();
            $table->longText('kebutuhan_sistem')->nullable();

            $table->text('arsitektur')->nullable();
            $table->text('tech_stack')->nullable();

            $table->string('status_project')->default('progress');

            $table->integer('progress')->default(0);

            $table->string('gambar_erd')->nullable();
            $table->string('gambar_flowchart')->nullable();

            $table->string('file_laporan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};