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
        <h4>Add New Poll</h4>
      </div>
      <div class="panel-body">
        <form class="form-group" method="POST" action="{{ url('/savepoll/'.$user->id) }}" enctype="multipart/form-data">
          <div class="col col-lg-4">
            <label>Topic  </label>
            <input type="text" name="topic" class="form-control">
            <label>Details</label>
            <textarea class="form-control" name="body" rows="5" cols="15"></textarea>

            {{ csrf_field() }}
            
            <label>Image</label>
            <input type="file" name="img" class="form-control"><br>
            <button class="btn btn-success btn-lg" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


