<?php
// database/migrations/xxxx_xx_xx_xxxxxx_create_surats_table.php

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
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_surat');
            $table->date('tanggal_surat');
            $table->string('pengirim');
            $table->string('perihal');
            $table->enum('jenis_surat', [
                'Surat Keterangan Usaha',
                'Surat Keterangan Tidak Mampu',
                'Surat Keterangan Jual Beli',
                'Surat Keterangan Nikah',
                'Surat Rekomendasi Kerja'
            ]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surats');
    }
};
