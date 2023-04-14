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
        Schema::create('data_detail_pengajuan_mitra', function (Blueprint $table) {
            $table->id('id_detail_pengajuan');
            $table->integer('jumlah_produk');
            $table->unsignedBigInteger('id_pengajuan_mitra');
            $table->foreign('id_pengajuan_mitra')->references('id_pengajuan_mitra')->on('data_pengajuan_mitra');
            $table->unsignedBigInteger('id_produk');
            $table->foreign('id_produk')->references('id_produk')->on('data_produk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_detail_pengajuan');
    }
};
