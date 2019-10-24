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
        <h4>Student Information</h4>
      </div>
      <div class="panel-body">
        <form class="form-group" method="POST" action="{{ url('/updatenotice/'.$student->id) }}" enctype="multipart/form-data">
          <div class="col col-lg-4">
            
            {{ csrf_field() }}

            <label>Image</label>
            <input type="file" name="img" class="form-control">
            <label>Topic</label>
            <input type="text" name="address" class="form-control" value="{{ $student->topic }}">            
            <label>Description</label>
            <textarea rows="5" cols="15" class="form-control" name="body" >{{ $student->body }}</textarea><br>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


