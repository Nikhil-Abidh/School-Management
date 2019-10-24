<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">    
  </head>

<body>
  <div class="container">
    
    @include('log.error')

    <div class="col col-md-4 col-md-offset-3">
    <form method="POST" action="{{ url('/adminreg') }}">
      <div class="text-center">
        <img class="mb-4" src="{{ asset('img/icon.jpg') }}" width="80" height="80">
        <h1 class="h3 mb-3 font-weight-normal">Admin Registration</h1>
      </div>
      <label for="name">Name</label>
      <input type="text" class="form-control" placeholder="Enter Name" name="name" autofocus>
      
      <label for="inputEmail">Email address</label>
      <input type="text" class="form-control" placeholder="Email address" name="email" >
      
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
      {{ csrf_field() }}
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
    </div>
  </div>
  <!-- Javascript and jQuery -->
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
