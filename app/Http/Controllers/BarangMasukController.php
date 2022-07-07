<?php

namespace App\Http\Controllers;

use App\Models\BarangMasuk;
use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $data['barang_masuk'] = BarangMasuk::orderBy('created_at','desc')->get();
        $data['supplier'] = Supplier::all();
        return view('transaksi.barang_masuk.index', $data);
    }

    public function create()
    {
        $data['barang'] = Barang::all();
        $data['supplier'] = Supplier::all();
        return view('transaksi.barang_masuk.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_transaksi' => 'required',
            'kode_barang' => 'required',
            'pengirim' => 'required',
            'jumlah' => 'required|numeric|min:1',
            'tanggal' => 'required',
        ]);

        $barang = Barang::where('kode_barang', $request->kode_barang)->first();
        $barang_masuk = BarangMasuk::create([
            'kode_transaksi' => $request->kode_transaksi,
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $barang->nama_barang,
            'pengirim' => $request->pengirim,
            'jumlah' => $request->jumlah,
            'satuan' => $barang->satuan,
            'tanggal' => $request->tanggal,
        ]);

        if ($barang_masuk) {
            $msg = ['success'=>true, 'message'=>'Berhasil simpan'];
            return redirect()->route('barang_masuk.index')->with($msg);
        }
    }
}
