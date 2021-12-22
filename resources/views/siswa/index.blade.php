@extends('template')

@section('title','list siswa')
@section('content')
  <div class="wrapper">
  <h1 style="text-align: center;"></h1>
  @if (session('success'))
      <div class="alert-success">
        <p>{{ session('success') }}</p> 
      </div>
  @endif
  <a href="/siswa/create" , class="btn btn-primary" >CREATE NEW DATA</a><br>  <br>
    <table class="table" style=" width: 100%">
      <thead class="bg-dark">
        <tr>
          <th>NAMA</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead>
      <tbody>
      @foreach($siswas as $siswa)
  <tr>

  <td >{{ $siswa->nama}}</td>
    
    <td style="width: 50px"><a class="btn btn-success" href="{{ route('siswa.edit', $siswa->id) }}">Edit</a></td>
    <form method="POST" action="{{ url('siswa', $siswa->id ) }}">
      @csrf
      @method('DELETE')
      <td style="width: 50px"><button class="btn btn-danger">Hapus</button></td>
    </form>
  </tr>
  
  @endforeach

@endsection