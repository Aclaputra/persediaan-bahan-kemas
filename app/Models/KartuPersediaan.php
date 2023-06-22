<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuPersediaan extends Model
{
    use HasFactory;

    protected $table = 'kartu_persediaan';

    protected $fillable = [
        'nama_produk',
        'kode_produk',
        'satuan',
        'keterangan',
    ];
}
