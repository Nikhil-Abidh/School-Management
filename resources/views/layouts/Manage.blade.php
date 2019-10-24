
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>

    <!-- Font Aesome -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FJQuery -->
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style type="text/css">
      body{
        background-color: white;
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
              <li><a href="">Poll</a></li>
            </ul>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item"><a href="#">Notification<span class="badge badge-danger">2</span></a></li>
          <li class="nav-item"><a href="{{ url('/logout') }}">Logout</a></li>
        </ul>
      </div>
    </nav>
  </header>

@yield('component')



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
            <p> <i class="fa fa-wifi" aria-hidden="true"></i>Website: <a href="#">www.xyz.com</a></p>
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
       
         $('.nav li').on('click', function(){
           $('.nav li').removeClass('active');
           $(this).addClass('active');
         });

         $('.panel').find('#stddob').datepicker();

         $('#viewmodal').on('show.bs.modal',function(event){
            console.log('Modal Opened')
         });

      
    </script>
    
</body>
</html>
