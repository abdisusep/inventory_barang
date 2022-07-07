<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index()
    {
        $data['jenis_barang'] = JenisBarang::all();
        return view('jenis_barang.index', $data);
    }

    public function create()
    {
        return view('jenis_barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_barang' => 'required'
        ]);

        $jenis_barang = JenisBarang::create([
            'jenis_barang' => $request->jenis_barang
        ]); 

        if ($jenis_barang) {
            $msg = ['success'=>true, 'message'=>'Berhasil simpan'];
            return redirect()->route('jenis_barang.index')->with($msg);
        }
    }

    public function edit(JenisBarang $jenisBarang)
    {
        $data['jenis_barang'] = $jenisBarang;
        return view('jenis_barang.edit', $data);
    }

    public function update(Request $request, JenisBarang $jenisBarang)
    {
        $request->validate([
            'jenis_barang' => 'required',
        ]);
        
        $update = $jenisBarang->update([
            'jenis_barang' => $request->jenis_barang,
        ]);

        if ($update) {
            $msg = ['success'=>true, 'message'=>'Berhasil update'];
            return redirect()->back()->with($msg);
        }
    }

    public function destroy(JenisBarang $jenisBarang)
    {
        $delete = $jenisBarang->delete();
        if ($delete) {
            $msg = ['success'=>true, 'message'=>'Berhasil hapus'];
            return redirect()->back()->with($msg);
        }
    }
}
