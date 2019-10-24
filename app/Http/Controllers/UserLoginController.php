<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Teacher;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Auth;


class UserLoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect()->to('dashboard');
        }
    	return view('log/login');
    }

    public function logadminout()
    {
        Auth::logout();
        return redirect()->to('/');
    }

    public function show(Request $req)
    {
    	$this->validate($req,[
    		'email' => 'required',
    		'password' => 'required',
    		'role' => 'required'
    	]);


    	$user ='';
    	if($req['role'] == "Student"){
    		$user = Student::where(['email' => $req['email'], 'password' => $req['password'] ])->first();
            
            if($user)
            return redirect()->to('/profilestudent/'.$user->id);
            
            else
            return redirect()->back(); 
        }
    	else if($req['role'] == "Teacher"){
            $user = Teacher::where(['email' => $req['email'], 'password' => $req['password'] ])->first();

            if($user)
            return redirect()->to('/profileteacher/'.$user->id);
            
            else
            return redirect()->back(); 
        }
        else if($req['role'] == "Admin"){
            $user = User::where(['email' => $req['email'], 'password' => $req['password'] ])->first();

            if($user){
                Auth::login($user);
                return redirect()->to('/dashboard');
            }
            else
            return redirect()->back(); 
        }
         	
    	 
    }

    public function adminindex()
    {
        return view('log/AdminReg');
    }

    public function adminregdata(Request $req)
    {
        $this->validate($req,[
            'email' => 'required|unique:admins',
            'password' => 'required|min:4|max:8',
            
        ]);

        if(!empty($req)){
            $user = new User();
            $user->name = $req['name'];
            $user->email = $req['email'];
            $user->password = $req['password'];
            $user->save();
            return redirect()->to('manageadmin');
        }
        else
            return redirect()->back();
    }

    public function postview($id)
    {
        $var = $id+15;
        $post = Post::where('id', $var)->first();
        return view('page/Post')->with(['post' => $post]);
    }
}













