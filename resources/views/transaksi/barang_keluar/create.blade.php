@extends('layouts.master')
 
@section('title', 'Transaksi Barang Keluar')

@section('content')
<form class="mt-4" action="{{ route('barang_keluar.store') }}" method="POST">
  @csrf
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kode Transaksi</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="kode_transaksi" value="TRK-{{ date('Ymdhs').rand(0000,9999) }}" readonly>
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" name="tanggal">
      @error('tanggal')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Barang</label>
    <div class="col-sm-5">
      <select name="kode_barang" class="form-control">
        <option value="">--Pilih--</option>
        @foreach($barang as $bar)
        <option value="{{ $bar->kode_barang }}">{{ $bar->nama_barang }} | {{ $bar->stok }} {{ $bar->satuan }}.</option>
        @endforeach
      </select>
      @error('kode_barang')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jumlah</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="jumlah">
      @error('jumlah')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>

  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Tujuan Kirim</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="tujuan">
      @error('tujuan')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  
  <div class="mb-3 row">
    <div class="col-sm-5 offset-sm-2">
      <button class="btn btn-primary">Simpan</button>
    </div>
  </div>
  
</form>
@endsection