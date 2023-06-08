@extends('layout.base-layout')
@section('content')
    <h2>Form Create User</h2>
    <form action="{{ route('employee.store') }}" method="POST">
    @csrf
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="name" placeholder="Fill Name" name="name">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat:</label>
        <textarea class="form-control" id="address" rows="3" placeholder="Fill Address" name="address"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection