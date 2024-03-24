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
        Schema::create('option_soal', function (Blueprint $table) {
            $table->id();
            $table->string('option');
            $table->unsignedBigInteger('id_soal')->unique()->nullable();
            $table->foreign('id_soal')->references('id')->on('bank_soal')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('option_soal');
    }
};
