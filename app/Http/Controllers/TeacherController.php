<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Poll;

class TeacherController extends Controller
{
    public function index()
    {
    	$std = Teacher::all(); 
    	return view('page/teacher/ManageTeacher')->with(['student' => $std]);
    }

    public function updateuserview($id)
    {
        $std = Teacher::where('id', $id)->first();
        return view('page/teacher/EditTeacher')->with(['student' => $std]);
    }

    public function profilestudent($id)
    {
        $user = Teacher::where('id', $id)->first();
        $poll = Poll::all();
        return view('page/teacher/ProfileTeacher')->with(['student' => $user, 'poll' => $poll]);
    }

    public function addview()
    {
    	return view('page/teacher/AddTeacher');
    }

    public function viewdata($id)
    {
        $std = Teacher::where('id',$id)->first();
        return view('page/teacher/viewTeacher')->with(['student' => $std]);
    }

    public function savedata(Request $req)
    {
    	$this->validate($req,[
    		'name' => 'required|min:4',
    		'email' => 'required|unique:students',
    		'password' => 'required|min:4|max:8',
    		'phone' => 'required',
    	]);

    	if(!empty($req)){
    	
    	$std = new Teacher();
    	$std->name = $req['name'];
    	$std->email = $req['email'];
    	$std->password = $req['password'];
    	$std->dob = $req['dob'];
    	$std->phone = $req['phone'];
    	$std->gender = $req['gender'];
    	$std->address = $req['address'];
    	$std->blood_grp = $req['bgrp'];
    	$std->about = $req['about'];
		$std->role = "Teacher";
        $std->position = $req['position'];
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
            $destpath = public_path('/img/teacher');
            $file->move($destpath, $imgname);
        }
        $std->image = $imgname;
        
    	$std->save();
   		return redirect()->to('manageteacher');

    	}
    	else{
    		return redirect()->back();	
    	}
    }

    public function editview($id){
        $std = Teacher::where('id',$id)->first();
        return view('page/teacher/EditAdminTeacher')->with(['student' => $std]);
    }

    public function updateadmindata(Request $req, $id)
    {
        $std = Teacher::where('id', $id)->first();
        $std->position = $req['position'];
        $std->update();
        return redirect()->to('manageteacher');
    }

    public function deletedata($id)
    {
        $std = Teacher::where('id', $id)->first();
        $std->delete();
        return redirect()->to('manageteacher');
    }

    public function updateuserdata(Request $req, $id)
    {
        $std = Teacher::where('id', $id)->first();
        $std->email = $req['email'];
        $std->password = $req['password'];
        $std->about = $req['about'];
        $std->phone = $req['phone'];
        $std->address = $req['address'];
        $std->update();
        return redirect()->to('/profileteacher/'.$id);
    }

}
