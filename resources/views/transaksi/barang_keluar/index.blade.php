@extends('layouts.master')
 
@section('title', 'Laporan Barang Keluar')

@section('content')
<div>
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