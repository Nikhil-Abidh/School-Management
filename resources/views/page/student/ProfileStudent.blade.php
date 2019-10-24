@extends('layouts.Manage')

@section('title')
  {{$student->name}}
@endsection


@section('component')
<div class="container">
  <div class="row">
    <div class="col col-sm-4">
      <img src="{{ URL::to('img/student/'.$student->image)}}" height="200px" width="200px" style="border-radius: 50%;"  />
      <h4 style="color: blue;"><strong>{{$student->role}}</strong></h4>
      <h3>{{$student->name}}</h3>
      <p>Class : {{$student->class}}</p>
      <p>Section : {{$student->section}}</p>
      <p>Roll : {{$student->cls_roll}}</p>
      <p>About :<br>
        <span class="">{{$student->about}}</span>
      </p>
    </div>
    <div class="col col-sm-4" >
      <div class="panel panel-success">
        <div class="panel-body">
          <a href="{{ url('/editstudentinfo/'.$student->id) }}" class="btn btn-success text-center">Edit Info</a>
          <a href="" class="btn btn-danger text-center">Update profile Photo</a>
        </div>
      </div>
      <div class="panel-group" id="myacc">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4 class="panel-title" data-target="#panel-1" data-toggle="collapse">Personal Info</h4>
          </div>
          <div class="panel-collapse collapse" id="panel-1">
            <div class="panel-body">
              <p>Email : {{$student->email}}</p>
              <p>Phone Number : {{$student->phone}}</p>
              <p>Password : {{$student->password}}</p>
              <p>Date of Birth : {{$student->dob}}</p>
              <p>Address : {{$student->address}}</p>
              <p>Blood Group : {{$student->blood_grp}}</p>
              <p>Gender : {{$student->gender}}</p>
            </div>
          </div>
        </div>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4 class="panel-title" data-target="#panel-2" data-toggle="collapse">Parent Info</h4>
          </div>
          <div class="panel-collapse collapse" id="panel-2">
            <div class="panel-body">
              <p>Father Name : {{$student->father_name }}</p>
              <p>Father Phone Number : {{$student->father_phone}}</p>
              <p>Father NID Number : {{$student->father_NID}}</p>
              <p>Mother Name : {{$student->mother_name}}</p>
              <p>Mother Phone Number : {{$student->mother_phone}}</p>
              <p>Mother NID Number : {{$student->mother_NID}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


