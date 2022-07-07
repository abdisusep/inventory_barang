<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    use HasFactory;

    protected $table = 'barang_masuk';

    protected $fillable = [
        'kode_transaksi', 
        'kode_barang',
        'nama_barang',
        'pengirim',
        'jumlah',
        'satuan',
        'tanggal',
    ];
}
