<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $data['supplier'] = Supplier::all();
        return view('supplier.index', $data);
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $supplier = Supplier::create([
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        if ($supplier) {
            $msg = ['success'=>true, 'message'=>'Berhasil simpan'];
            return redirect()->route('supplier.index')->with($msg);
        }
    }

    public function show(Supplier $supplier)
    {
        return view('supplier.create');
    }

    public function edit(Supplier $supplier)
    {
        $data['supplier'] = $supplier;
        return view('supplier.edit', $data);
    }

    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'kode_supplier' => 'required',
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);
        
        $update = $supplier->update([
            'kode_supplier' => $request->kode_supplier,
            'nama_supplier' => $request->nama_supplier,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        if ($update) {
            $msg = ['success'=>true, 'message'=>'Berhasil update'];
            return redirect()->back()->with($msg);
        }
    }

    public function destroy(Supplier $supplier)
    {
        $delete = $supplier->delete();
        if ($delete) {
            $msg = ['success'=>true, 'message'=>'Berhasil hapus'];
            return redirect()->back()->with($msg);
        }
    }
}
