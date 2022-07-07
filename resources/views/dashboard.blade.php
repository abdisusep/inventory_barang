@extends('layouts.master')
 
@section('title', 'Dashboard')

@section('content')
<p class="m-0 fs-14">Selamat Datang <b>{{ Auth::user()->name }}</b></p>
@endsection