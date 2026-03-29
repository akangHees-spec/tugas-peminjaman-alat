<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alat extends Model
{
    protected $table = 'alats';

    protected $fillable = [
        'kode_alat',
        'nama_alat',
        'kategori_id',
        'kondisi',
        'jumlah_total',
        'jumlah_tersedia',
        'lokasi',
        'keterangan'
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function detailPeminjaman(): HasMany
    {
        return $this->hasMany(DetailPeminjaman::class, 'alat_id');
    }
}
