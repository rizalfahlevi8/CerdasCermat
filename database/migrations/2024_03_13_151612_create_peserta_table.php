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
        Schema::create('peserta', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('status');
            $table->double('subnilai')->default(0);
            $table->unsignedBigInteger('id_user')->unique()->nullable();
            $table->unsignedBigInteger('id_tim')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->nullOnDelete();
            $table->foreign('id_tim')->references('id')->on('tim')->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta');
    }
};
