<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
   public function index()
   {	
   		$std = User::all();
   		return view('page/poll/ManageAdmin')->with(['student' => $std ]);
   }

   public function deletedata($id)
    {
        $std = User::where('id', $id)->first();
        $std->delete();
        return redirect()->to('manageadmin');
    }
}