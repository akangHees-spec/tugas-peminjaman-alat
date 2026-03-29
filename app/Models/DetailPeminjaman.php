<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPeminjaman extends Model
{
    protected $table = 'detail_peminjamen'; 

    protected $fillable = [
        'peminjaman_id',
        'alat_id',
        'jumlah_pinjam',
        'kondisi_pinjam',
    ];

    public function peminjaman(): BelongsTo
    {
        return $this->belongsTo(Peminjaman::class, 'peminjaman_id');
    }

    public function alat(): BelongsTo
    {
        return $this->belongsTo(Alat::class, 'alat_id');
    }
}