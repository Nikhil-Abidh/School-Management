@extends('layouts.userview')

@section('title')
  Manage Student
@endsection


@section('content')
<div class="container">
  <div class="row">
    <div class="col col-lg-12">
      <div class="panel panel-success">
        <div class="panel-heading">
          <h2>All Teachers</h2>
        </div>
      </div>
      <div class="table">
        <table class=" table-condensed table-bordered">
          <tr>
            <th>Image</th>
            <th>Teacher Name</th>
            <th>Father Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Email</th>
          </tr>
          @foreach($user as $x)
          <tr>
            <td><img src="{{ URL::to('img/teacher/'.$x->image) }}" width="40px" height="40px;" style="border-radius: 50%;"></td>
            <td>{{$x->name}}</td>
            <td>{{$x->father_name}}</td>
            <td>{{$x->phone}}</td>
            <td>{{$x->address}}</td>
            <td>{{$x->email}}</td>
          </tr>
          @endforeach
        </table>
      </div>
      <div>{!! $user->links(); !!}</div>
    </div>
  </div>
</div>


@endsection


