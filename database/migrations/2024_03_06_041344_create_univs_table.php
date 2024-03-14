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
        Schema::create('univs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_univ');
            $table->foreign('kota_id')->references('id')->on('kotas')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('kota_id');
            $table->unsignedBigInteger('negara_id');
            $table->foreign('negara_id')->references('id')->on('negaras')->onDelete('cascade')->onUpdate('cascade');
            $table->text('alamat_univ');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('univs');
    }
};