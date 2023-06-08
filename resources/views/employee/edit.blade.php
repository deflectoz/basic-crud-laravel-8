@extends('layout.base-layout')
@section('content')
    <h2>Form Edit User</h2>
    <form action="{{ route('employee.update', $showEmployee->id) }}" method="POST">
    @csrf
    @method('PUT')
      <div class="form-group">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="name" placeholder="Fill Name" name="name" value="{{$showEmployee->name}}">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat:</label>
        <textarea class="form-control" id="address" rows="3" placeholder="Fill Address" name="address">{{$showEmployee->address}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection