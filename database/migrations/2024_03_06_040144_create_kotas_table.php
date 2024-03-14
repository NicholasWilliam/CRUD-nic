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
        Schema::create('kotas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('negara_id');
            $table->foreign('negara_id')->references('id')->on('negaras')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nama_kota');
            $table->text('deskripsi_kota');
            $table->text('kodewarna_kota');
            $table->text('gambar_kota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kotas');
    }
};
