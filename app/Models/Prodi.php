<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    // kolom yang diizinkan untuk diinsert data
    protected $fillable = [
        'nama_prodi',
        'singkatan',
        'kaprodi',
        'fakultas_id'
    ];

    // relaso model fakultas
    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
}
