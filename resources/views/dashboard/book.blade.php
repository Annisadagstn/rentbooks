@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')
<form>
  <div class="mb-3">
    <label for="exampleInputJudul" class="form-label">Judul</label>
    <input type="judul" class="form-control" id="exampleInputJudul" aria-describedby="judulHelp">
    <div id="judulHelp"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPenulis" class="form-label">Penulis</label>
    <input type="penulis" class="form-control" id="exampleInputPenulis" aria-describedby="penulisHelp">
    <div id="penulisHelp"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPenerbit" class="form-label">Penerbit</label>
    <input type="penerbit" class="form-control" id="exampleInputPenerbit" aria-describedby="penerbitHelp">
    <div id="penerbitHelp"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputCoverBook" class="form-label">Cover Book</label>
    <input type="coverbook" class="form-control" id="exampleInputCoverBook" aria-describedby="coverbookHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputSinopsis" class="form-label">Sinopsis</label>
    <input type="sinopsis" class="form-control" id="exampleInputSinopsis" aria-describedby="sinopsisHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection