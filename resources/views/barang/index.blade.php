@extends('layouts.master')
 
@section('title', 'List Barang')

@section('content')
<div class="mb-3">
    <a href="{{ route('barang.create') }}" class="btn btn-light btn-sm"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<div>
<table class="table table-bordered datatable">
    <thead>
    <tr class="bg-light">
      <th scope="col">#</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Stok</th>
      <th scope="col">Satuan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($barang as $brg)
    <tr>
        <td>{{ $loop->iteration }}.</td>
        <td>{{ $brg->kode_barang }}</td>
        <td>{{ $brg->nama_barang }}</td>
        <td>{{ $brg->jenis_barang }}</td>
        <td>{{ $brg->stok }}</td>
        <td>{{ $brg->satuan }}</td>
        <td>
            <form action="{{ route('barang.destroy', $brg->id) }}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('barang.edit', $brg->id) }}" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="confirm('Yakin hapus?')"><i class="fa-solid fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection