@extends('layouts.master')
 
@section('title', 'Laporan Barang Masuk')

@section('content')
<div class="mb-3">
    <a href="{{ route('cetak_barang_masuk_pdf') }}" target="_blank" class="btn btn-light btn-sm text-danger fw-bold"><i class="fa-solid fa-file-pdf"></i> Cetak PDF</a>
    <a href="{{ route('cetak_barang_masuk_excel') }}" target="_blank" class="btn btn-light btn-sm text-success fw-bold"><i class="fa-solid fa-file-excel"></i> Cetak Excel</a>
</div>

<div class="table-responsive">
  <table class="table table-bordered datatable">
      <thead>
      <tr class="bg-light">
        <th scope="col">#</th>
        <th scope="col">Kode Transaksi</th>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Supplier</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @foreach($barang_masuk as $brgm)
      <tr>
          <td>{{ $loop->iteration }}.</td>
          <td>{{ $brgm->kode_transaksi }}</td>
          <td>{{ $brgm->kode_barang }}</td>
          <td>{{ $brgm->nama_barang }}</td>
          <td>{{ $brgm->pengirim }}</td>
          <td>{{ $brgm->jumlah }}</td>
          <td>{{ $brgm->tanggal }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection