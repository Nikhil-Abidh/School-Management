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
        <h4>Update Student Information</h4>
      </div>
      <div class="panel-body">
        <form class="form-group" method="POST" action="{{ url('/updateadminstudent/'.$student->id) }}">
          <div class="col col-lg-4">
            <h3>Student Name : {{ $student->name }}</h3>
            <label>Class</label>
            <select class="form-control" name="class">
              <option>Select One</option>
              <option value="Class 6" <?php if($student->class == 'Class 6') echo "selected"; ?> >Class 6</option>
              <option value="Class 7" <?php if($student->class == 'Class 7') echo "selected"; ?>>Class 7</option>
              <option value="Class 8" <?php if($student->class == 'Class 8') echo "selected"; ?>>Class 8</option>
              <option value="Class 9" <?php if($student->class == 'Class 9') echo "selected"; ?>>Class 9</option>
              <option value="Class 10" <?php if($student->class == 'Class 10') echo "selected"; ?>>Class 10</option>
            </select>
            <label>Section</label>
            <select class="form-control" name="section">
              <option>Select One</option>
              <option value="A" <?php if($student->section == 'A') echo "selected"; ?>>A</option>
              <option value="B" <?php if($student->section == 'B') echo "selected"; ?>>B</option>
              <option value="C" <?php if($student->section == 'C') echo "selected"; ?>>C</option>
              <option value="D" <?php if($student->section == 'D') echo "selected"; ?>>D</option>
            </select>
            {{ csrf_field() }}
            <label>Class Roll</label>
            <input type="text" name="roll" class="form-control" value="{{ $student->cls_roll }}"><br>
            <button type="submit" class="btn btn-success btn-lg">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


