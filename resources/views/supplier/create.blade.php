@extends('layouts.master')
 
@section('title', 'Tambah Supplier')

@section('content')
<div class="mb-3">
    <a href="{{ route('supplier.index') }}" class="btn btn-light btn-sm loading"><i class="fa-solid fa-angle-left"></i> Kembali</a>
</div>

<form action="{{ route('supplier.store') }}" method="POST">
  @csrf
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kode Supplier</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="kode_supplier" value="{{ old('kode_supplier') }}">
      @error('kode_supplier')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama Supplier</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_supplier" value="{{ old('nama_supplier') }}">
      @error('nama_supplier')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5">
      <textarea class="form-control" name="alamat">{{ old('alamat') }}</textarea>
      @error('alamat')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Telepon</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" name="telepon" value="{{ old('telepon') }}">
      @error('telepon')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
 
  <div class="mb-3 row">
    <div class="col-sm-5 offset-sm-2">
      <button class="btn btn-primary loading">Simpan</button>
    </div>
  </div>
  
</form>
@endsection