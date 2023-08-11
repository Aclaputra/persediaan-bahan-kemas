<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPesanan extends Model
{
    use HasFactory;

    protected $table = 'data_pesanans';

    protected $fillable = [
        'kd_barang',
        'kd_pesanan',
        'nama',
        'status',
        'detail',
    ];
}
