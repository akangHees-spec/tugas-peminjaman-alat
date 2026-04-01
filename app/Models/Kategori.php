<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    protected $table = 'kategoris';

    protected $fillable = [
        'name_kategori',
        'deskripsi'
    ];

    public function alats(): HasMany
    {
        return $this->hasMany(Alats::class, 'kategori_id');
    }
}
