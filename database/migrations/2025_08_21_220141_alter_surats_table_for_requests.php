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
        Schema::table('surats', function (Blueprint $table) {
            // Menambahkan kolom user_id untuk relasi ke user
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Menambahkan kolom status untuk melacak proses
            $table->string('status')->default('pending');

            // Menambahkan kolom keterangan dari pemohon
            $table->text('keterangan_pemohon')->nullable();

            // Mengubah kolom yang sudah ada agar bisa null
            $table->string('nomor_surat')->nullable()->change();
            $table->date('tanggal_surat')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('surats', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id', 'status', 'keterangan_pemohon']);

            $table->string('nomor_surat')->nullable(false)->change();
            $table->date('tanggal_surat')->nullable(false)->change();
        });
    }
};
