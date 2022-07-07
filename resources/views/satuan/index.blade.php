@extends('layouts.master')
 
@section('title', 'List Satuan Barang')

@section('content')
<div class="mb-3">
    <a href="{{ route('satuan.create') }}" class="btn btn-light btn-sm loading"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<div class="table-responsive">
  <table class="table table-bordered datatable">
      <thead>
      <tr class="bg-light">
        <th scope="col">#</th>
        <th scope="col">Satuan</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($satuan as $sat)
      <tr>
          <td>{{ $loop->iteration }}.</td>
          <td>{{ $sat->satuan }}</td>
          <td>
              <form action="{{ route('satuan.destroy', $sat->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('satuan.edit', $sat->id) }}" class="btn btn-outline-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                  <button type="submit" class="btn btn-outline-danger btn-sm loading"><i class="fa-solid fa-trash"></i></button>
              </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection