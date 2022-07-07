@extends('layouts.master')
 
@section('title', 'Dashboard')

@section('content')
<h4>Selamat Datang {{ Auth::user()->name }}</h4>
@endsection