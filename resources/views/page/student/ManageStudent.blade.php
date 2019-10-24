@extends('layouts.Manage')

@section('title')
  Manage Student
@endsection


@section('component')
<div class="container">
  <div class="row">
    <div class="col col-lg-8">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h4>All Students<span class="pull-right"><a class="btn btn-success btn-xs" href="/addstudent">Add</a></span></h4>
        </div>
          <div class="panel-body">
            <div class="table">
              <table class="table-condensed">
                <tr>
                  <th>Student Name</th>
                  <th>father Name</th>
                  <th>Gender</th>
                  <th>Roll</th>
                  <th>Class</th>
                  <th>Section</th>
                  <th>Action</th>
                </tr>
                @foreach($student as $x)
                <tr>
                  <td>{{ $x->name }}</td>
                  <td>{{ $x->father_name }}</td>
                  <td>{{ $x->gender }}</td>
                  <td>{{ $x->cls_roll }}</td>
                  <td>{{ $x->class }}</td>
                  <td>{{ $x->section }}</td>
                  <td>
                  <a href="{{ url('/editstudent/'.$x->id) }}" class="btn btn-success btn-xs">Edit</a>|
                  <a href="{{ url('/deletestudent/'.$x->id) }}" class="btn btn-danger btn-xs">Delete</a>|
                  <a href="{{ url('/viewstudent/'.$x->id) }}" class="btn btn-default btn-xs">Preview</a>
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


<!-- View Modal
data-toggle="modal" data-target="#viewmodal" data-stdid="{{ $x->id }}"

 -->
<div class="modal fade" id="viewmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection


