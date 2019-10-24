@extends('layouts.Manage')

@section('title')
  {{$student->name}}
@endsection


@section('component')
<div class="container">
  <div class="row">
    <div class="col col-sm-3">
      <h2>Poll Board</h2>
      <h3>Poll ID : {{$student->id}}</h3>
      <h4>Posted By :<strong> {{$student->user_name }} </strong></h4>
      <h4>Posted at : {{$student->created_at }}</h4>
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


