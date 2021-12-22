@extends('template')
@section('title', 'Data Siswa')
@section('content')
<div class="wrapper">
  <h1>Buat Data Siswa</h1>
  
  @if (session('success'))
  <div class="alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif
  
  @if ($errors->any())
  <div class="alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif
  <div class="card w-50">
    <div class="card-header bg-secondary text-white">
      <h5>Tambah Data Siswa</h5>
    </div>
    <div class="card-body">
  <form method="post" action="{{ url('siswa') }}">
    @csrf
    <div class="form-group">
      <label>NAMA SISWA</label>
      <input class="form-control"  name="nama" type="text" placeholder="NAMA SISWA"> 
    </div>
    <div class="card-footer">
    <button class="btn btn-secondary">Submit</button>
  </form>
  <a href="/siswa"class="btn btn-secondary">Kembali</a></div>
  </div>
</div>
@endsection