<?php

namespace App\Http\Controllers;

use App\Models\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        $data['satuan'] = Satuan::all();
        return view('satuan.index', $data);
    }

    public function create()
    {
        return view('satuan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'satuan' => 'required'
        ]);

        $satuan = Satuan::create([
            'satuan' => $request->satuan
        ]); 

        if ($satuan) {
            $msg = ['success'=>true, 'message'=>'Berhasil simpan'];
            return redirect()->route('satuan.index')->with($msg);
        }
    }

    public function edit(Satuan $satuan)
    {
        $data['satuan'] = $satuan;
        return view('satuan.edit', $data);
    }

    public function update(Request $request, Satuan $satuan)
    {
        $request->validate([
            'satuan' => 'required',
        ]);
        
        $update = $satuan->update([
            'satuan' => $request->satuan,
        ]);

        if ($update) {
            $msg = ['success'=>true, 'message'=>'Berhasil update'];
            return redirect()->back()->with($msg);
        }
    }

    public function destroy(Satuan $satuan)
    {
        $delete = $satuan->delete();
        if ($delete) {
            $msg = ['success'=>true, 'message'=>'Berhasil hapus'];
            return redirect()->back()->with($msg);
        }
    }
}
