<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Auth;

class StudentController extends Controller
{
    public function index()
    {
    	$std = Student::all(); 
    	return view('page/student/ManageStudent')->with(['student' => $std]);
    }

    public function updateuserview($id)
    {
        $std = Student::where('id', $id)->first();
        return view('page/student/EditStudent')->with(['student' => $std]);
    }

    public function profilestudent($id)
    {
        $user = Student::where('id', $id)->first();
        return view('page/student/Profilestudent')->with(['student' => $user]);
    }

    public function addview()
    {
    	return view('page/student/AddStudent');
    }

    public function viewdata($id)
    {
        $std = Student::where('id',$id)->first();
        return view('page/student/viewStudent')->with(['student' => $std]);
    }

    public function savedata(Request $req)
    {
    	$this->validate($req,[
    		'name' => 'required|min:4',
    		'email' => 'required|unique:students',
    		'password' => 'required|min:4|max:8',
    		'phone' => 'required',
    		'class' => 'required',
    		'section' => 'required',
    		'roll' => 'required',
    	]);

    	if(!empty($req)){
    	
    	$std = new Student();
    	$std->name = $req['name'];
    	$std->email = $req['email'];
    	$std->password = $req['password'];
    	$std->dob = $req['dob'];
    	$std->class = $req['class'];
    	$std->section= $req['section'];
    	$std->phone = $req['phone'];
    	$std->gender = $req['gender'];
    	$std->address = $req['address'];
    	$std->blood_grp = $req['bgrp'];
    	$std->cls_roll = $req['roll'];
    	$std->about = $req['about'];
		$std->role = "Student";
    	$std->father_name = $req['fname'];
    	$std->father_phone = $req['fphone'];
    	$std->father_NID = $req['fnid'];
    	$std->mother_name = $req['mname'];
    	$std->mother_phone = $req['mphone'];
    	$std->mother_NID = $req['mnid'];
    	
        $imgname = 'xyz.jpg';
        if($req->hasfile('img')){
            $file = $req->file('img');
            $filename = $file->getClientOriginalName();
            $imgname = uniqid().$filename;
            $destpath = public_path('/img/student');
            $file->move($destpath, $imgname);
        }
        $std->image = $imgname;
        
    	$std->save();
   		return redirect()->to('managestudent');

    	}
    	else{
    		return redirect()->back();	
    	}
    }

    public function editview($id){
        $std = Student::where('id',$id)->first();
        return view('page/student/EditAdminStudent')->with(['student' => $std]);
    }

    public function updateadmindata(Request $req, $id)
    {
        $std = Student::where('id', $id)->first();
        $std->class = $req['class'];
        $std->section = $req['section'];
        $std->cls_roll = $req['roll'];
        $std->update();
        return redirect()->to('managestudent');
    }

    public function deletedata($id)
    {
        $std = Student::where('id', $id)->first();
        $std->delete();
        return redirect()->to('managestudent');
    }

    public function updateuserdata(Request $req, $id)
    {
        $std = Student::where('id', $id)->first();
        $std->email = $req['email'];
        $std->password = $req['password'];
        $std->about = $req['about'];
        $std->phone = $req['phone'];
        $std->address = $req['address'];
        $std->update();
        return redirect()->to('/profilestudent/'.$id);
    }

}
