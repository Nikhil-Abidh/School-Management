<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Student;
use App\Teacher;
use App\Staff;
use App\Poll;
use App\Notice;



Route::get('/', function () {
    return view('page/welcomeView');
});

Route::get('/post/{id}', 'UserLoginController@postview');

//-------------Dashboard--------------------
Route::get('/dashboard', function(){
	return view('page/dashboard');
});

Route::get('/class', function(){
	return view('page/class');
});
Route::get('/section', function(){
	return view('page/section');
});
Route::get('/student', function(){
	$user = Student::paginate(3);
	return view('page/student')->with(['user' => $user]);
});
Route::get('/teacher', function(){
	$user = Teacher::paginate(3);
	return view('page/teacher')->with(['user' => $user]);
});
Route::get('/staff', function(){
	$user = Staff::paginate(3);
	return view('page/staff')->with(['user' => $user]);
});
Route::get('/notice', function(){
	$user = Notice::paginate(3);
	return view('page/notice')->with(['user' => $user]);
});
Route::get('/poll', function(){
	$user = Poll::paginate(3);
	return view('page/poll')->with(['user' => $user]);
});


//--------------Student-------------------
Route::get('/managestudent', 'StudentController@index');
Route::get('/addstudent', 'StudentController@addview');
Route::post('/savestudent','StudentController@savedata');
Route::get('/editstudent/{id}','StudentController@editview');
Route::post('/updateadminstudent/{id}', 'StudentController@updateadmindata');
Route::get('/deletestudent/{id}', 'StudentController@deletedata');
Route::get('/viewstudent/{id}', 'StudentController@viewdata');
Route::get('/profilestudent/{id}', 'StudentController@profilestudent');
Route::get('/editstudentinfo/{id}', 'StudentController@updateuserview');
Route::post('/updatestudent/{id}', 'StudentController@updateuserdata');

//--------------Teacher-------------------
Route::get('/manageteacher', 'TeacherController@index');
Route::get('/addteacher', 'TeacherController@addview');
Route::post('/saveteacher','TeacherController@savedata');
Route::get('/editteacher/{id}','TeacherController@editview');
Route::post('/updateadminteacher/{id}', 'TeacherController@updateadmindata');
Route::get('/deleteteacher/{id}', 'TeacherController@deletedata');
Route::get('/viewteacher/{id}', 'TeacherController@viewdata');
Route::get('/profileteacher/{id}', 'TeacherController@profilestudent');
Route::get('/editteacherinfo/{id}', 'TeacherController@updateuserview');
Route::post('/updateteacher/{id}', 'TeacherController@updateuserdata');




//----------------Login and Register-----------------
Route::get('/loginuser', 'UserLoginController@index');
Route::post('/userlogin', 'UserLoginController@show');
Route::get('/logout', 'UserLoginController@logadminout');

//--------------Staff-------------------Us
Route::get('/managestaff', 'StaffController@index');
Route::get('/addStaff', 'StaffController@addview');
Route::post('/savestaff','StaffController@savedata');
Route::get('/deletestaff/{id}', 'StaffController@deletedata');
Route::get('/viewStaff/{id}', 'StaffController@viewdata');
Route::get('/profilestaff/{id}', 'StaffController@profilestudent');

Route::get('/editstaffinfo/{id}', 'StaffController@updateuserview');
Route::post('/updatestaff/{id}', 'StaffController@updateuserdata');


//------------Notice---------------------
Route::get('/managenotice', 'NoticeController@index');
Route::get('/addnotice', 'NoticeController@addview');
Route::post('/savenotice','NoticeController@savedata');
Route::get('/deletenotice/{id}', 'NoticeController@deletedata');
Route::get('/viewnotice/{id}', 'NoticeController@viewdata');
Route::get('/editnotice/{id}','NoticeController@editview');
Route::post('/updatenotice/{id}', 'NoticeController@updateuserdata');



//--------------Poll-------------------
Route::get('/addpoll/{id}', 'PollController@addview');
Route::post('/savepoll/{id}','PollController@savedata');
Route::get('/managepoll', 'PollController@index');
Route::get('/viewpoll/{id}', 'PollController@viewdata');




//---------------Admin------------------
Route::get('/manageadmin', 'AdminController@index');
Route::get('/adminregview', 'UserLoginController@adminindex');
Route::post('/adminreg', 'UserLoginController@adminregdata');
Route::get('/deleteadmin/{id}', 'AdminController@deletedata');

//---------------------------------
//---------------------------------
//---------------------------------
//---------------------------------
//---------------------------------
//---------------------------------
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
