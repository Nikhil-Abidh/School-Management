@extends('layouts.Manage')

@section('title')
  {{$student->name}}
@endsection


@section('component')
<div class="container">
  <div class="row">
    <div class="col col-md-4">
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
    <div class="col col-md-4" style="background-color: #E0E5E5">
      <div class="table">
        <table class="table-condensed table-bordered">
          <tr>
            <td><label>Name</label></td>
            <td><label>{{$student->name}}</label></td>
          </tr>
          <tr>
            <td><label>Email</label></td>
            <td><label>{{$student->email}}</label></td>
          </tr>
          <tr>
            <td><label>Phone Number</label></td>
            <td><label>{{$student->phone}}</label></td>
          </tr>
          <tr>
            <td><label>Password</label></td>
            <td><label>{{$student->password}}</label></td>
          </tr>
          <tr>
            <td><label>Gender</label></td>
            <td><label>{{$student->gender}}</label></td>
          </tr>
          <tr>
            <td><label>Date of Birth</label></td>
            <td><label>{{$student->dob}}</label></td>
          </tr>
          <tr>
            <td><label>Address</label></td>
            <td><label>{{$student->address}}</label></td>
          </tr>
          <tr>
            <td><label>Blood Group</label></td>
            <td><label>{{$student->blood_grp}}</label></td>
          </tr>
        </table>
      </div>
    </div>
    <div class="col col-md-4" style="background-color: #E0E5E5">
      <div class="table">
        <table class="table-condensed table-bordered">
          <tr>
            <td><label>Father Name</label></td>
            <td><label>{{$student->father_name}}</label></td>
          </tr>
          <tr>
            <td><label>Father Phone Number</label></td>
            <td><label>{{$student->father_phone}}</label></td>
          </tr>
          <tr>
            <td><label>Father NID Number</label></td>
            <td><label>{{$student->father_NID}}</label></td>
          </tr>
          <tr>
            <td><label>Mother Name</label></td>
            <td><label>{{$student->mother_name}}</label></td>
          </tr>
          <tr>
            <td><label>Mother Phone Number</label></td>
            <td><label>{{$student->mother_phone}}</label></td>
          </tr>
          <tr>
            <td><label>Mother NID Number</label></td>
            <td><label>{{$student->mother_NID}</label></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection


