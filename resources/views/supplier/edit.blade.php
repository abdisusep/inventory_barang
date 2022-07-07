@extends('layouts.master')
 
@section('title', 'Edit Supplier')

@section('content')
<div class="mb-3">
    <a href="{{ route('supplier.index') }}" class="btn btn-light btn-sm"><i class="fa-solid fa-angle-left"></i> Kembali</a>
</div>
<form action="{{ route('supplier.update', $supplier->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Kode Supplier</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="kode_supplier" value="{{ $supplier->kode_supplier }}">
      @error('kode_supplier')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Nama Supplier</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nama_supplier" value="{{ $supplier->nama_supplier }}">
      @error('nama_supplier')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-5">
      <textarea class="form-control" name="alamat">{{ $supplier->alamat }}</textarea>
      @error('alamat')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Telepon</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="telepon" value="{{ $supplier->telepon }}">
      @error('telepon')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  
  <div class="mb-3 row">
    <div class="col-sm-5 offset-sm-2">
      <button class="btn btn-primary">Update</button>
    </div>
  </div>
  
</form>
@endsection