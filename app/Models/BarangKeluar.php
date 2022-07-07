<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    use HasFactory;

    protected $table = 'barang_keluar';

    protected $fillable = [
        'kode_transaksi', 
        'kode_barang',
        'nama_barang',
        'tujuan',
        'jumlah',
        'satuan',
        'tanggal',
    ];
}
