<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use App\Models\BarangKeluar;

class BarangKeluarExport implements FromArray
{
    public function array(): array
    {
        $data = BarangKeluar::orderBy('tanggal', 'desc')->get();
        $result = [];
        $no = 1;
        foreach ($data as $value) {
            $result[] = [
                $no++,
                $value->kode_transaksi,
                $value->kode_barang,
                $value->nama_barang,
                $value->tujuan,
                $value->jumlah.' '.$value->satuan,
                $value->tanggal,
            ];
        }
        return [
            ['No.', 'Kode Transaksi', 'Kode Barang', 'Nama Barang', 'Tujuan', 'Jumlah', 'Tanggal'],
            $result
        ];
    }
}
