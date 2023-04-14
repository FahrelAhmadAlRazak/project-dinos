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
        Schema::create('data_pencatatan_mitra', function (Blueprint $table) {
            $table->id('id_pencatatan');
            $table->date('tanggal_pencatatan');
            $table->integer('pengeluaran_bahan_baku');
            $table->integer('pengeluaran_produksi');
            $table->integer('pengeluaran_kemasan');
            $table->integer('pengeluaran_transportasi');
            $table->integer('pengeluaran_gaji_pegawai');
            $table->integer('pengeluaran_lain_lain');
            $table->integer('pemasukan');
            $table->string('keterangan');
            $table->unsignedBigInteger('id_mitra');
            $table->foreign('id_mitra')->references('id_mitra')->on('data_akun_mitra');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pencatatan_mitra');
    }
};
