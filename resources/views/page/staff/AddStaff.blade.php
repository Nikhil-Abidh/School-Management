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
        <h4>Staff Registration</h4>
      </div>
      <div class="panel-body">
        <form class="form-group" method="POST" action="{{ url('/savestaff') }}" enctype="multipart/form-data">
          <div class="col col-lg-4">
            <label>Name : </label>
            <input type="text" name="name" class="form-control">
            <label>Email</label>
            <input type="email" name="email" class="form-control">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <label>Date of Birth</label>
            <input type="text" name="dob" class="form-control">
            <label>Position</label>
            <select class="form-control" name="position">
              <option value="Staff">Staff</option>
              <option value="Accountain">Accountain</option>
            </select>
            {{ csrf_field() }}
            <label>Image</label>
            <input type="file" name="img" class="form-control">
          </div>
          <div class="col col-lg-4">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
            <label>Gender</label><br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br>
            <label>Address</label>
            <input type="text" name="address" class="form-control">
            <label>Blood Group</label>
            <select name="bgrp" class="form-control">
              <option>Select One</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
            </select>
          </div>
          <div class="col col-lg-4">
            <label>Father Name</label>
            <input type="text" name="fname" class="form-control">
            <label>Father Phone No</label>
            <input type="text" name="fphone" class="form-control">
            <label>Father NID No</label>
            <input type="text" name="fnid" class="form-control">
            <label>Mother Name</label>
            <input type="text" name="mname" class="form-control">
            <label>Mother Phone No</label>
            <input type="text" name="mphone" class="form-control">
            <label>Mother NID No</label>
            <input type="text" name="mnid" class="form-control"><br>
            <button class="btn btn-success btn-lg" type="submit">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


