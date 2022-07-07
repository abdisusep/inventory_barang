@extends('layouts.master')
 
@section('title', 'Edit Satuan Barang')

@section('content')
<div class="mb-3">
    <a href="{{ route('satuan.index') }}" class="btn btn-light btn-sm"><i class="fa-solid fa-angle-left"></i> Kembali</a>
</div>
<form action="{{ route('satuan.update', $satuan->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3 row">
    <label class="col-sm-2 col-form-label">Satuan Barang</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="satuan" value="{{ $satuan->satuan }}">
      @error('satuan')<small class="text-danger">{{ $message }}</small> @enderror
    </div>
  </div>
  
  <div class="mb-3 row">
    <div class="col-sm-5 offset-sm-2">
      <button class="btn btn-primary">Udpate</button>
    </div>
  </div>
  
</form>
@endsection