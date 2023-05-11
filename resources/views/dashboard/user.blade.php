@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')

<h1>Data User</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Address</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <thead>
      <tr>
        <th scope="col">1</th>
        <th scope="col">Sonia</th>
        <th scope="col">soniac@gmail</th>
        <th scope="col">12345678</th>
        <th scope="col">Bandung</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
    $i=1;
    ?>
    @foreach($data as $dt)
    <tr>
    <td>{{$i++}}</td>
    <td>{{$dt->name}}</td>
    <td>{{$dt->email}}</td>
    <td>{{$dt->phone}}</td>
    <td>{{$dt->address}}</td>
  
      <td>
        <form action="{{route('indexEditUser', $dt->id)}}" class="d-inline">
          <button type="submit" class="btn btn-outline-success"><i class="bi bi-pencil-fill"></i></button>
          @csrf
        </form>
        <form action="{{route('delete', $dt->id)}}" method="post" class="d-inline" onsubmit="return confirm('are you sure to delete this data?')">
          <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash-fill"></i></button>
          @csrf
        </form>
      </td>
    

 @endforeach
</table>
@endsection