<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kode_barang',
        'kuantitas',
        'tanggal_masuk',
        'harga',
        'deskripsi'
    ];
}
