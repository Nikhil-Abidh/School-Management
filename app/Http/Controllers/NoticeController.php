<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Notice;

class NoticeController extends Controller
{
    public function index()
    {
    	$std = Notice::all(); 
    	return view('page/poll/ManageNotice')->with(['student' => $std]);
    }

    public function addview()
    {
    	return view('page/poll/AddNotice');
    }

    public function viewdata($id)
    {
        $std = Notice::where('id',$id)->first();
        return view('page/poll/viewNotice')->with(['student' => $std]);
    }

    public function savedata(Request $req)
    {
    	$this->validate($req,[
    		'topic' => 'required|',
    	]);

    	if(!empty($req)){
    	
    	$std = new Notice();
        If(Auth::check())
            $user = Auth::user();

    	$std->user_id = $user->id;
    	$std->user_name = $user->name;
    	$std->topic = $req['topic'];
    	$std->body = $req['body'];
    	$std->last_date = $req['ldate'];

        $imgname = 'xyz.jpg';
        if($req->hasfile('img')){
            $file = $req->file('img');
            $filename = $file->getClientOriginalName();
            $imgname = uniqid().$filename;
            $destpath = public_path('/img/notice');
            $file->move($destpath, $imgname);
        }
        $std->image = $imgname;
        
    	$std->save();
   		return redirect()->to('managenotice');

    	}
    	else{
    		return redirect()->back();	
    	}
    }

    public function editview($id){
        $std = Notice::where('id',$id)->first();
        return view('page/poll/EditNotice')->with(['student' => $std]);
    }


    public function deletedata($id)
    {
        $std = Notice::where('id', $id)->first();
        $std->delete();
        return redirect()->to('manageNotice');
    }

    public function updateuserdata(Request $req, $id)
    {
        $std = Notice::where('id', $id)->first();
        $std->topic = $req['topic'];
        $std->body = $req['body'];
        $imgname = 'xyz.jpg';
        if($req->hasfile('img')){
            $file = $req->file('img');
            $filename = $file->getClientOriginalName();
            $imgname = uniqid().$filename;
            $destpath = public_path('/img/notice');
            $file->move($destpath, $imgname);
        }
        $std->image = $imgname;

        $std->update();
        return redirect()->to('/profileNotice/'.$id);
    }

}
