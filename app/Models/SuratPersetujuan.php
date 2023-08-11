<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratPersetujuan extends Model
{
    use HasFactory;

    protected $table = 'surat_persetujuans';

    protected $fillable = [
        'kd_customer',
        'nama',
        'detail',
    ];
}
