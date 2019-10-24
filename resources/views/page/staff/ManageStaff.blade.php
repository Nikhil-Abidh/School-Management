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
          <h4>All Staffs & Accountain<span class="pull-right"><a class="btn btn-success btn-xs" href="{{ url('/addStaff') }}">Add</a></span></h4>
        </div>
          <div class="panel-body">
            <div class="table">
              <table class="table-condensed">
                <tr>
                  <th>Staff Name</th>
                  <th>father Name</th>
                  <th>Gender</th>
                  <th>Phone</th>
                  <th>Designation</th>
                  <th>Action</th>
                </tr>
                @foreach($student as $x)
                <tr>
                  <td>{{ $x->name }}</td>
                  <td>{{ $x->father_name }}</td>
                  <td>{{ $x->gender }}</td>
                  <td>{{ $x->phone }}</td>
                  <td>{{ $x->position }}</td>
                  <td>
                  <a href="{{ url('/deleteStaff/'.$x->id) }}" class="btn btn-danger btn-xs">Delete</a>|
                  <a href="{{ url('/viewStaff/'.$x->id) }}" class="btn btn-default btn-xs">Preview</a>
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


