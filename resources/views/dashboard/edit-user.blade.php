@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input type="email" class="form-control" id="name">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
    <textarea class="form-control" id="email"></textarea>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">No Hp</label>
    <input type="email" class="form-control" id="noHp">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
    <textarea class="form-control" id="address" rows="3"></textarea>
  </div>

@endsection