@extends('layouts.master')
 
@section('title', 'Laporan Barang Keluar')

@section('content')
<div class="mb-3">
    <a href="{{ route('cetak_barang_keluar_pdf') }}" target="_blank" class="btn btn-light btn-sm text-danger fw-bold"><i class="fa-solid fa-file-pdf"></i> Cetak PDF</a>
    <a href="{{ route('cetak_barang_keluar_excel') }}" target="_blank" class="btn btn-light btn-sm text-success fw-bold"><i class="fa-solid fa-file-excel"></i> Cetak Excel</a>
</div>

<div class="table-responsive">
  <table class="table table-bordered datatable">
      <thead>
      <tr class="bg-light">
        <th scope="col">#</th>
        <th scope="col">Kode Transaksi</th>
        <th scope="col">Kode Barang</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Tujuan</th>
        <th scope="col">Jumlah</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
      @foreach($barang_keluar as $brgk)
      <tr>
          <td>{{ $loop->iteration }}.</td>
          <td>{{ $brgk->kode_transaksi }}</td>
          <td>{{ $brgk->kode_barang }}</td>
          <td>{{ $brgk->nama_barang }}</td>
          <td>{{ $brgk->tujuan }}</td>
          <td>{{ $brgk->jumlah }}</td>
          <td>{{ $brgk->tanggal }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection