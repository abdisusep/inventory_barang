<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\Satuan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $data['barang'] = Barang::all();
        return view('barang.index', $data);
    }

    public function create()
    {
        $data['jenis_barang'] = JenisBarang::all();
        $data['satuan'] = Satuan::all();
        return view('barang.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'satuan' => 'required',
        ]);

        $barang = Barang::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'satuan' => $request->satuan,
            'stok' => 0,
        ]);

        if ($barang) {
            $msg = ['success'=>true, 'message'=>'Berhasil simpan'];
            return redirect()->route('barang.index')->with($msg);
        }
    }

    public function show(Barang $barang)
    {
        return view('barang.create');
    }

    public function edit(Barang $barang)
    {
        $data['barang'] = $barang;
        $data['jenis_barang'] = JenisBarang::all();
        $data['satuan'] = Satuan::all();

        return view('barang.edit', $data);
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'satuan' => 'required',
        ]);
        
        $update = $barang->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'satuan' => $request->satuan,
        ]);

        if ($update) {
            $msg = ['success'=>true, 'message'=>'Berhasil update'];
            return redirect()->back()->with($msg);
        }
    }

    public function destroy(Barang $barang)
    {
        $delete = $barang->delete();
        if ($delete) {
            $msg = ['success'=>true, 'message'=>'Berhasil hapus'];
            return redirect()->back()->with($msg);
        }
    }
}
