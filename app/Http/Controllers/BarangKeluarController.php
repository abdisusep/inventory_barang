<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $data['barang_keluar'] = BarangKeluar::orderBy('tanggal','desc')->get();
        $data['supplier'] = Supplier::all();
        return view('transaksi.barang_keluar.index', $data);
    }

    public function create()
    {
        $data['barang'] = Barang::all();
        $data['supplier'] = Supplier::all();
        return view('transaksi.barang_keluar.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi' => 'required',
            'kode_barang' => 'required',
            'tujuan' => 'required',
            'jumlah' => 'required',
            'tanggal' => 'required',
        ]);

        $barang = Barang::where('kode_barang', $request->kode_barang)->first();
        $barang_keluar = BarangKeluar::create([
            'kode_transaksi' => $request->kode_transaksi,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $barang->nama_barang,
            'tujuan' => $request->tujuan,
            'jumlah' => $request->jumlah,
            'satuan' => $barang->satuan,
            'tanggal' => $request->tanggal,
        ]);

        if ($barang_keluar) {
            $msg = ['success'=>true, 'message'=>'Berhasil simpan'];
            return redirect()->route('barang_keluar.index')->with($msg);
        }
    }
}
