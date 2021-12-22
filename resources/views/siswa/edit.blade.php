@extends('template')
@section('title', 'EDIT')
@section('content')
<div class="wrapper">
    
  <center><br><br>
  <h3>EDIT DATA ANDA</h3>
  <br><br>
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
  
  <form method="POST" action="{{ url('siswas') }}">
    @csrf
    @method('PUT')
    
    <center>
    <input name="title"  type="text" placeholder="NAMA"> <br>  </br>
    <button class="btn-blue">Submit</button>
  </form>
</div>
@endsection