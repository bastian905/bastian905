@extends('template')

@section('title','list guru')
@section('content')
  <div class="wrapper">
  <h1 style="text-align: center;"></h1>
  @if (session('success'))
      <div class="alert-success">
        <p>{{ session('success') }}</p> 
      </div>
  @endif
  <a href="/guru/create" , class="btn btn-primary" >CREATE NEW DATA</a><br>  <br>
  <table class="table" style=" width: 100%">
      <thead class="bg-dark">
        <tr>
          <th>NIP</th>
          <th>NAMA GURU</th>
          <th>MAPEL</th>
          <th>EDIT</th>
          <th>DELETE</th>
        </tr>
      </thead>
      <tbody>
  </div>
    
      @foreach($gurus as $guru)
  <tr>

  <td >{{ $guru->nip}}</td>
  <td >{{ $guru->nama_guru}}</td>
  <td >{{ $guru->mapel}}</td>
   
    
    
    <td style="width: 50px"><a class="btn btn-success" href="{{ route('guru.edit', $guru->id) }}">Edit</a></td>
    <form method="POST" action="{{ url('guru', $guru->id ) }}">
      @csrf
      @method('DELETE')
      <td style="width: 50px"><button class="btn btn-danger">Hapus</button></td>
    </form>
  </tr>
  
  @endforeach
@endsection