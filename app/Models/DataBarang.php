<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    use HasFactory;

    protected $table = 'data_barangs';

    protected $fillable = [
        'data_suppliers_id',
        'nama_barang',
        'jenis',
        'jalur',
        'harga',
        'stok',
    ];
}
