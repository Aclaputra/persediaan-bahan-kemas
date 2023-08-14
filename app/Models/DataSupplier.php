<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSupplier extends Model
{
    use HasFactory;

    protected $table = 'data_suppliers';

    protected $fillable = [
        'nama_supplier',
        'detail',
    ];
}
