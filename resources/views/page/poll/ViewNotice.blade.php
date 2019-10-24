@extends('layouts.Manage')

@section('title')
  {{$student->name}}
@endsection


@section('component')
<div class="container">
  <div class="row">
    <div class="col col-sm-3">
      <h2>Notice Board</h2>
      <h3>Notice ID : {{$student->id}}</h3>
      <h4>Posted on : {{$student->created_at }}</h4>
      <h4>Last Date : {{$student->last_date}}</h4>
    </div>
    <div class="col col-md-4">
      <img src="{{ URL::to('img/notice/'.$student->image)}}" height="300px" width="300px"  />
    </div>
    <div class="col col-md-4">
    <h1>{{$student->topic}}</h1>
    <p>{{$student->body}}</p>
    </div>
    </div>
  </div>
@endsection


