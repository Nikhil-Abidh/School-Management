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
        <h4>Upgrade Teacher Designation</h4>
      </div>
      <div class="panel-body">
        <form class="form-group" method="POST" action="{{ url('/updateadminteacher/'.$student->id) }}">
          <div class="col col-lg-4">
            <h3>Teacher Name : {{ $student->name }}</h3>
            <label>Designation</label>
            <select class="form-control" name="position">
              <option value="Teacher" <?php if($student->position == 'Teacher') echo "selected"; ?>>Teacher (Junior)</option>
              <option value="Lecturer" <?php if($student->position == 'Lecturer') echo "selected"; ?>>Lecturer</option>
              <option value="Asst. Lecturer" <?php if($student->position == 'Asst. Lecturer') echo "selected"; ?>>Asst. Lecturer</option>
              <option value="Professor" <?php if($student->position == 'Professor') echo "selected"; ?>>Professor</option>
              <option value="Asst. Professor" <?php if($student->position == 'Asst. Professor') echo "selected"; ?>>Asst. Professor</option>
            </select>
            
            {{ csrf_field() }}
            <button type="submit" class="btn btn-success btn-lg">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


