
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard</title>

    <!-- Font Aesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style type="text/css">
      body{
        background-color: white;
      }
      .text-center{
        background-color: #2EFEF7;
        padding-top: 5px;
        padding-bottom: 5px;
        margin-bottom: 20px;
      }
      .text-center span{
        font-size: 30px;
      }
      .fa{
        padding-right: 10px;
      }
    </style>

  </head>

<body>

  <header>
    <nav class="nav navbar-default ">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}"> <i class="fa fa-send" aria-hidden="true"></i>Ichapura Model High School</a>
      </div>
      <div class="container">
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a href="{{ url('/dashboard') }}">Home</a></li>
          <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/managestudent') }}">Student</a></li>
              <li><a href="{{ url('/manageteacher') }}">Teacher</a></li>
              <li><a href="{{ url('/managestaff') }}">Staff</a></li>
              <li><a href="{{ url('/managestaff') }}">Accountains</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Academy</a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/class') }}">Class</a></li>
              <li><a href="{{ url('/section') }}">Section</a></li>
              <li><a href="">Payment</a></li>
              <li><a href="">Account</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Forum</a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/managenotice') }}">Notice</a></li>
              <li><a href="{{ url('/managepoll') }}">Poll</a></li>
            </ul>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="{{ url('/') }}">Notification<span class="badge badge-danger">2</span></a></li>
          <li class="nav-item"><a href="{{ url('/logout') }}">Logout</a></li>
        </ul>

      </div>
    </nav>
  </header>
  
<div class="container">
  <div class="row">
    <div class="col col-sm-4">
      <div class="text-center" >
        <h3>Total Teachers</h3>
        <span><strong>25</strong></span>
      </div>
    </div>
    <div class="col col-sm-4">
      <div class="text-center" />
        <h3>Total Staffs</h3>
        <span><strong>36</strong> </span>
      </div>
    </div>
    <div class="col col-sm-4">
      <div class="text-center" >
        <h3>Total Students</h3>
        <span><strong>80</strong> </span>
      </div>
    </div>
    <div class="col col-sm-4">
      <div class="text-center" >
        <h3>Total Notices</h3>
        <span><strong>80</strong> </span>
      </div>
    </div>
    <div class="col col-sm-4">
      <div class="text-center" >
        <h3>Total Polls</h3>
        <span><strong>80</strong> </span>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <h2>School Related Staffs</h2>
    <div class="col col-md-4">
      <h3>Student</h3>
      <p>Manage students and related tasks</p>
      <a href="{{ url('/managestudent') }}" class="btn btn-primary">Manage</a>
    </div>
    <div class="col col-md-4">
      <h3>Teacher</h3>
      <p>Manage Teacher and related tasks. This is where we have more and more useful tasks.</p>
      <a href="{{ url('/manageteacher') }}" class="btn btn-primary">Manage</a>
    </div>
    <div class="col col-md-4">
      <h4>Notice</h4>
      <p>Add, manage or update notices</p>
      <a href="{{ url('/managenotice') }}" class="btn btn-success">Manage</a>
      <h4>Polls</h4>
      <p>View, update and manage polls</p>
      <a href="{{ url('/managepoll') }}" class="btn btn-success">Manage</a>
    </div>
    <div class="col col-md-4">
      <h3>Staff & Accountain</h3>
      <p>Manage staff, accountain and their related tasks</p>
      <a href="{{ url('/managestaff') }}" class="btn btn-primary">Manage</a>
    </div>
    <div class="col col-md-4">
      <h3>Add Admin</h3>
      <p>Manage sadmin and admin panel related tasks</p>
      <a href="{{ url('/manageadmin') }}" class="btn btn-primary">Manage</a>
    </div>
  
  </div>

<br>

  <div class="row">
    <h2>Accounts Related Staffs</h2>
    <div class="col col-md-4">
      <h3>Payment</h3>
      <p>Manage students and related tasks</p>
      <button type="button" class="btn btn-primary">Manage</button>
    </div>
    <div class="col col-md-4">
      <h3>Account</h3>
      <p>Manage students and related tasks</p>
      <button type="button" class="btn btn-primary">Manage</button>
    </div>
  </div>  

</div>
  
<hr>
<footer style="background-color: #E0E5E5; padding-bottom: 20px;">
    <div class="container" >
      <div class="row" >
        <div class="col col-sm-4 col-sm-offset-0" >
          <div class="">
            <h3>Socail Networks</h3>
            <p>Follw Us On: <br><br>
              <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
              <i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
              <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
            </p>
          </div>
        </div>
        <div class="col col-sm-4 col-sm-offset-0" >
          <div class="">
            <h3>Web</h3>
            <p> <i class="fa fa-wifi" aria-hidden="true"></i>Website: <a href="{{ url('/') }}">www.xyz.com</a></p>
            <p> <i class="fa fa-at" aria-hidden="true"></i> Info: infoxyz@gmail.com</p>
            <p> <i class="fa fa-at" aria-hidden="true"></i> Company: xxx@gmail.com </p>
          </div>
        </div>
        <div class="col col-sm-4 col-sm-offset-0" >
          <div class="">
            <h3>Address</h3>
            <p>37, South Khlgone, Dhaka-1217</p>
            <p>Phone : 01916157490</p>
            <p>Mobile : 01916157490</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
    <!-- Bootstrap core CSS -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
       $(function(){
         $('.nav li').on('click', function(){
           $('.nav li').removeClass('active');
           $(this).addClass('active');
         });
       });
    </script>
</body>
</html>
