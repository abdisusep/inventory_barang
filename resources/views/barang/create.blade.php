@extends('layouts.master')
 
@section('title', 'Tambah Barang')

@section('content')
<div class="mb-3">
  <a href="{{ route('barang.index') }}" class="btn btn-light btn-sm"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
</div>
<form action="{{ route('barang.store') }}" method="POST">
  @csrf
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kode Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="kode_barang">
      @error('kode_barang')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_barang">
      @error('nama_barang')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jenis Barang</label>
    <div class="col-sm-5">
      <select name="jenis_barang" class="form-control">
        <option value="">--Pilih--</option>
        @foreach($jenis_barang as $jen_bar)
        <option value="{{ $jen_bar->jenis_barang }}">{{ $jen_bar->jenis_barang }}</option>
        @endforeach
      </select>
      @error('jenis_barang')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Satuan</label>
    <div class="col-sm-5">
      <select name="satuan" class="form-control">
        <option value="">--Pilih--</option>
        @foreach($satuan as $sat)
        <option value="{{ $sat->satuan }}">{{ $sat->satuan }}</option>
        @endforeach
      </select>
      @error('satuan')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-5 offset-sm-2">
      <button class="btn btn-primary">Simpan</button>
    </div>
  </div>
  
</form>
@endsection