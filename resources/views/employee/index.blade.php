@extends('layout.base-layout')
@section('content')
@section('content')
<div class="row">
<div class="col-md-6">
<h5>Data List Employee</h5>
    </div>
    <div class="col-md-6 text-right">
    <a href="{{route('employee.create')}}" class="btn btn-sm btn-success shadow">Add Data Employee</a>  
    </div>
</div>
<br>
 <!-- Notifikasi menggunakan flash session data -->
 @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($employees as $employee)
    <tr>
      <td>{{$employee->name}}</td>
      <td>{{$employee->address}}</td>
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
      <form onsubmit="return confirm('Are You Sure Delete {{$employee->name}} Data ?');"
            action="{{ route('employee.destroy', $employee->id) }}" method="POST">
            <a href="{{ route('employee.show', $employee->id) }}" class="btn btn-sm btn-warning shadow">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger shadow">Delete</button>
    </form>
     </div>

</td>
    </tr>
    @empty
    <tr>
        <td class="text-center text-mute" colspan="4">-- Data Empty --</td>
    </tr>
    @endforelse
  </tbody>
</table>
@endsection