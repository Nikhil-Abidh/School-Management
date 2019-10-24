@extends('layouts.Manage')

@section('title')
  Manage Student
@endsection


@section('component')
<div class="container">
  <div class="row">
    <div class="col col-lg-12">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>All Notices<span class="pull-right"><a class="btn btn-success btn-xs" href="{{ url('/addnotice') }}">Add</a></span></h4>
        </div>
          <div class="panel-body">
            <div class="table">
              <table class="table-condensed">
                <tr>
                  <th>Notice ID</th>
                  <th>Posted By</th>
                  <th>Posted Date</th>
                  <th>Last Date</th>
                  <th>Topic</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                @foreach($student as $x)
                <tr>
                  <td>{{ $x->id }}</td>
                  <td>{{ $x->user_name }}</td>
                  <td>{{ $x->created_at }}</td>
                  <td>{{ $x->last_date }}</td>
                  <td>{{ $x->topic }}</td>
                  <th>{{ $x->body }}</th>
                  @if($x->image == "xyz.jpg")
                  <td>Available</td>
                  @else
                  <td>{{ $x->image }}</td>
                  @endif
                  <td>
                  <a href="{{ url('/editnotice/'.$x->id) }}" class="btn btn-success btn-xs">Edit</a>|
                  <a href="{{ url('/deletenotice/'.$x->id) }}" class="btn btn-danger btn-xs">Delete</a>|
                  <a href="{{ url('/viewnotice/'.$x->id) }}" class="btn btn-default btn-xs">Preview</a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        <div class="panel-footer">
          <p><span class="pull-right"><small>Copyright &copy;Authoriy</small></span></p>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection


