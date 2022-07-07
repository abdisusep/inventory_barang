@extends('layouts.master')
 
@section('title', 'List Jenis Barang')

@section('content')
<div class="mb-3">
    <a href="{{ route('jenis_barang.create') }}" class="btn btn-light btn-sm"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<div>
<table class="table table-bordered datatable">
    <thead>
    <tr class="bg-light">
      <th scope="col">#</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($jenis_barang as $jbrg)
    <tr>
        <td>{{ $loop->iteration }}.</td>
        <td>{{ $jbrg->jenis_barang }}</td>
        <td>
            <form action="{{ route('jenis_barang.destroy', $jbrg->id) }}" method="post">
                @csrf
                @method('DELETE')
                <a href="{{ route('jenis_barang.edit', $jbrg->id) }}" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="confirm('Yakin hapus?')"><i class="fa-solid fa-trash"></i></button>
            </form>
        </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>
@endsection