<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;
use App\Teacher;

class PollController extends Controller
{
    public function index()
    {
        $std = Poll::all(); 
        return view('page/poll/ManagePoll')->with(['student' => $std]);
    }

    public function addview($id)
    {
        $user = Teacher::where('id', $id)->first(); 
    	return view('page/poll/AddPoll')->with(['user' => $user]);
    }

    public function viewdata($id)
    {
        $std = Poll::where('id',$id)->first();
        return view('page/poll/viewPoll')->with(['student' => $std]);
    }

    public function savedata(Request $req, $id)
    {
    	$this->validate($req,[
    		'topic' => 'required',
    	]);

    	if(!empty($req)){
    	
    	$std = new Poll();
        $tec = Teacher::where('id', $id)->first(); 

    	$std->user_id = $tec->id;
    	$std->user_name = $tec->name;
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

    	$std->save();
   		return redirect()->to('/profileteacher/'.$tec->id);

    	}
    	else{
    		return redirect()->back();	
    	}
    }
}
