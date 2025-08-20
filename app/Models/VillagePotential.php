<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VillagePotential extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'is_active', // Pastikan kolom ini ada di tabel Anda
    ];

    /**
     * Scope a query to only include active village potentials.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', 1);
    }
}
