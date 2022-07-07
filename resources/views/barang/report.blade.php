@extends('layouts.master')
 
@section('title', 'Laporan Stok Barang')

@section('content')
<div class="mb-3">
    <a href="{{ route('cetak_stok_barang_pdf') }}" target="_blank" class="btn btn-light btn-sm text-danger fw-bold"><i class="fa-solid fa-file-pdf"></i> Cetak PDF</a>
    <a href="{{ route('cetak_stok_barang_excel') }}" target="_blank" class="btn btn-light btn-sm text-success fw-bold"><i class="fa-solid fa-file-excel"></i> Cetak Excel</a>
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
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection