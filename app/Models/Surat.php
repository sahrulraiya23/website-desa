<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Surat extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_surat',
        'tanggal_surat',
        'pengirim',
        'perihal',
        'jenis_surat',
        'user_id',
        'status',
        'keterangan_pemohon',
    ];

    /**
     * Mendapatkan user yang mengajukan surat.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
