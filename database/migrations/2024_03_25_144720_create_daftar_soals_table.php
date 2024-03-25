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
        Schema::create('daftar_soals', function (Blueprint $table) {
            $table->id();
            $table->text('pertanyaan')->nullable();
            $table->string('gambar_pertanyaan')->nullable();
            $table->json('opsi_jawaban')->nullable();
            $table->json('gambar_opsi_jawaban')->nullable();
            $table->unsignedTinyInteger('jawaban')->nullable();
            $table->unsignedBigInteger('id_paket')->nullable();
            $table->foreign('id_paket')->references('id')->on('paket_soals');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftar_soals');
    }
};
