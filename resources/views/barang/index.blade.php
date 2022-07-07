@extends('layouts.master')
 
@section('title', 'List Barang')

@section('content')
<div class="mb-3">
    <a href="{{ route('barang.create') }}" class="btn btn-light btn-sm loading"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<div class="table-responsive">
  <table class="table table-bordered datatable">
    <thead>
      <tr class="bg-light">
        <th scope="col">#</th>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Jenis Barang</th>
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
          <td>{{ $brg->satuan }}</td>
          <td>
              <form action="{{ route('barang.destroy', $brg->id) }}" method="post">
                  @method('DELETE')
                  @csrf
                  <a href="{{ route('barang.edit', $brg->id) }}" class="btn btn-outline-warning btn-sm loading"><i class="fa-solid fa-edit"></i></a>
                  <button type="submit" class="btn btn-outline-danger btn-sm loading"><i class="fa-solid fa-trash"></i></button>
              </form>
          </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection