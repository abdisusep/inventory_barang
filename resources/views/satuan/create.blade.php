@extends('layouts.master')
 
@section('title', 'Tambah Satuan Barang')

@section('content')
<div class="mb-3">
    <a href="{{ route('satuan.index') }}" class="btn btn-light btn-sm"><i class="fa-solid fa-angle-left"></i> Kembali</a>
</div>

<form action="{{ route('satuan.store') }}" method="POST">
  @csrf
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Jenis Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="satuan">
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