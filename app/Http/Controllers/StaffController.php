<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;

class StaffController extends Controller
{
    public function index()
    {
    	$std = Staff::all(); 
    	return view('page/staff/Managestaff')->with(['student' => $std]);
    }

    public function updateuserview($id)
    {
        $std = Staff::where('id', $id)->first();
        return view('page/staff/Editstaff')->with(['student' => $std]);
    }

    public function profilestudent($id)
    {
        $user = Staff::where('id', $id)->first();
        return view('page/staff/Profilestaff')->with(['student' => $user]);
    }

    public function addview()
    {
    	return view('page/staff/AddStaff');
    }

    public function viewdata($id)
    {
        $std = Staff::where('id',$id)->first();
        return view('page/staff/ViewStaff')->with(['student' => $std]);
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
    	
    	$std = new Staff();
    	$std->name = $req['name'];
    	$std->email = $req['email'];
    	$std->password = $req['password'];
    	$std->dob = $req['dob'];
    	$std->phone = $req['phone'];
    	$std->gender = $req['gender'];
    	$std->address = $req['address'];
    	$std->blood_grp = $req['bgrp'];
    	$std->role = $req['position'];
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
   		return redirect()->to('managestaff');

    	}
    	else{
    		return redirect()->back();	
    	}
    }

    public function deletedata($id)
    {
        $std = Staff::where('id', $id)->first();
        $std->delete();
        return redirect()->to('manageStaff');
    }

    public function updateuserdata(Request $req, $id)
    {
        $std = Staff::where('id', $id)->first();
        $std->email = $req['email'];
        $std->password = $req['password'];
        $std->phone = $req['phone'];
        $std->address = $req['address'];
        $std->update();
        return redirect()->to('/profileStaff/'.$id);
    }
   
}
