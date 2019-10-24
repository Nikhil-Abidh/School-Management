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
          <h2>All Notices</h2>
        </div>
      </div>
      <div class="table">
        <table class=" table-condensed table-bordered">
          <tr>
            <th>Notice ID</th>
            <th>Posted At</th>
            <th>Valid until</th>
            <th>Topic</th>
            <th>Details</th>
            <th>Image</th>
          </tr>
          @foreach($user as $x)
          <tr>
            <td>{{$x->id}}</td>
            <td>{{$x->created_at}}</td>
            <td>{{$x->last_date}}</td>
            <td>{{$x->topic}}</td>
            <td>{{$x->body}}</td>
            @if($x->img)  <td>Available</td>
            @else  <td>NOt Available </td>
            @endif
          </tr>
          @endforeach
        </table>
      </div>
      <div>{!! $user->links(); !!}</div>
    </div>
  </div>
</div>


@endsection


