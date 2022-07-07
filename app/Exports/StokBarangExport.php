<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;
use App\Models\Barang;

class StokBarangExport implements FromArray
{
    public function array(): array
    {
        $data = Barang::orderBy('nama_barang')->get();
        $result = [];
        $no = 1;
        foreach ($data as $value) {
            $result[] = [
                $no++,
                $value->kode_barang,
                $value->nama_barang,
                $value->jenis_barang,
                $value->stok.' '.$value->satuan,
            ];
        }
        return [
            ['No.', 'Kode Barang', 'Nama Barang', 'Jenis Barang', 'Stok'],
            $result
        ];
    }
}
