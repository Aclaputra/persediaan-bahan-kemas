<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BahanKeluar extends Model
{
    use HasFactory;

    protected $table = 'bahan_keluar';

    protected $fillable = [
        'untuk_produk',
        'no_bets',
        'jumlah',
        'sisa',
        'paraf',
    ];
}
