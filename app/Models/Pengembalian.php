<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengembalian extends Model
{
    protected $table = 'pengembalians';

    protected $fillable = [
        'peminjaman_id',
        'tanggal_kembali_realisasi',
        'kondisi_kembali',
        'denda',
        'catatan',
    ];

    public function peminjaman(): BelongsTo
    {
        return $this->belongsTo(Peminjaman::class, 'peminjaman_id');
    }
}