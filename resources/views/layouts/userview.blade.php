<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>welcome</title>

  <!-- Font Aesome -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
  <!-- Bootstrap core CSS -->

  <style type="text/css">
    
    .fa{
      padding-right: 10px;
    }
  </style>


</head>
<body>


  <!-- Navbar Start -->
  <header>
    <nav class="nav navbar-default ">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ url('/') }}"> <i class="fa fa-send" aria-hidden="true"></i>Ichapura Model High School</a>
      </div>
      <div class="container">
        <ul class="nav navbar-nav navbar-right">
          <li class="nav-item active"><a href="{{ url('/') }}">Home</a></li>
          <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Academy <i class="fa fa-sort-desc"></i></a>
            <ul class="dropdown-menu">
              <li><a href="{{ url('/student') }}">Student</a></li>
              <li><a href="{{ url('/teacher') }}">Teacher</a></li>
              <li><a href="{{ url('/staff') }}">Staff</a></li>
              <li><a href="{{ url('/staff') }}">Accountains</a></li>
              <li><a href="{{ url('/notice') }}">Notice</a></li>
              <li><a href="{{ url('/poll') }}">Poll</a></li>
              <li><a href="{{ url('/class') }}">Class</a></li>
              <li><a href="{{ url('/section') }}">Section</a></li>
              <li><a href="{{ url('/') }}">Addmission</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="{{ url('/') }}">Contact Us</a></li>
          <li class="nav-item"><a href="{{ url('/loginuser') }}">Login</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Navbar end -->
  
  <!-- Carosel start -->
  <div class="container">
    <div class="carousel slide" id="myslide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myslide" data-slide-to="0" class="active"></li>
        <li data-target="#myslide" data-slide-to="1"></li>
        <li data-target="#myslide" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="{{ asset('img/img1.jpg') }}">
          <div class="carousel-caption">
            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h2>
          </div>
        </div>

        <div class="item">
          <img src="{{ asset('img/img2.jpg') }}">
          <div class="carousel-caption">
            <h2 class="text-right">Lorem Ipsum is survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</h2>
          </div>
        </div>

        <div class="item">
          <img src="{{ asset('img/img3.jpg') }}">
          <div class="carousel-caption">
            <h2 class="text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h2>
          </div>
        </div>
      </div>
      <a href="#myslide" class="left carousel-control" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></a>
      <a href="#myslide" class="right carousel-control" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </div>
  
  <!-- Carosel ends -->
  <!-- Left sidebar -->
<br>

@yield('content')

  <!-- footer start -->
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
  <!-- footer end -->

    <!-- JavaScript and JQoery -->
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