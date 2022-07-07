<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use PDF;
use Excel;
use App\Exports\StokBarangExport;
use App\Exports\BarangMasukExport;
use App\Exports\BarangKeluarExport;

class LaporanController extends Controller
{
    public function stok_barang_pdf()
    {
        $data['barang'] = Barang::orderBy('nama_barang', 'asc')->get();
        $pdf = PDF::loadView('cetak.stok_barang', $data);
        return $pdf->download('LaporanStokBarang.pdf');
    }

    public function stok_barang_excel()
    {
        return Excel::download(new StokBarangExport, 'LaporanStokBarang.xlsx');
    }

    public function barang_masuk_pdf()
    {
        $data['barang_masuk'] = BarangMasuk::orderBy('tanggal', 'asc')->get();
        $pdf = PDF::loadView('cetak.barang_masuk', $data);
        return $pdf->download('LaporanBarangMasuk.pdf');
    }

    public function barang_masuk_excel()
    {
        return Excel::download(new BarangMasukExport, 'LaporanBarangMasuk.xlsx');
    }

    public function barang_keluar_pdf()
    {
        $data['barang_keluar'] = BarangKeluar::orderBy('tanggal', 'asc')->get();
        $pdf = PDF::loadView('cetak.barang_keluar', $data);
        return $pdf->download('LaporanBarangKeluar.pdf');
    }

    public function barang_keluar_excel()
    {
        return Excel::download(new BarangKeluarExport, 'LaporanBarangKeluar.xlsx');
    }

}
