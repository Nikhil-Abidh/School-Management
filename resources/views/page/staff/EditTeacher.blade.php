@extends('layouts.Manage')

@section('title')
  Add New Student
@endsection


@section('component')
<div class="container">
  @include('log.error')
  <div class="row">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h4>Teacher Information</h4>
      </div>
      <div class="panel-body">
        <form class="form-group" method="POST" action="{{ url('/updateteacher/'.$student->id) }}" enctype="multipart/form-data">
          <div class="col col-lg-4">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
            <label>Password</label>
            <input type="password" name="password" class="form-control" value="{{ $student->password }}">
            
            {{ csrf_field() }}

            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $student->phone }}">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{ $student->address }}">            
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


