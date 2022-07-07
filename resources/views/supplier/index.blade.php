@extends('layouts.master')
 
@section('title', 'List Supplier')

@section('content')
<div class="mb-3">
    <a href="{{ route('supplier.create') }}" class="btn btn-light btn-sm loading"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<div class="table-responsive">
  <table class="table table-bordered datatable">
    <thead>
      <tr class="bg-light">
        <th scope="col">#</th>
        <th scope="col">Kode Supplier</th>
        <th scope="col">Nama Supplier</th>
        <th scope="col">Alamat</th>
        <th scope="col">Telepon</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($supplier as $sup)
      <tr>
          <td>{{ $loop->iteration }}.</td>
          <td>{{ $sup->kode_supplier }}</td>
          <td>{{ $sup->nama_supplier }}</td>
          <td>{{ $sup->alamat }}</td>
          <td>{{ $sup->telepon }}</td>
          <td>
              <form action="{{ route('supplier.destroy', $sup->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('supplier.edit', $sup->id) }}" class="btn btn-outline-warning btn-sm loading"><i class="fa-solid fa-edit"></i></a>
                  <button type="submit" class="btn btn-outline-danger btn-sm loading"><i class="fa-solid fa-trash"></i></button>
              </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection