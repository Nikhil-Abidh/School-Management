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
    <form method="POST" action="{{ url('/userlogin') }}">
      <div class="text-center">
        <img class="mb-4" src="{{ asset('img/icon.jpg') }}" width="80" height="80">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      </div>
      <label for="inputEmail">Email address</label>
      <input type="email" class="form-control" placeholder="Email address" name="email" autofocus>
      
      <label for="inputPassword">Password</label>
      <input type="password" class="form-control" placeholder="Password" name="password">
      {{ csrf_field() }}
      <label>Designation</label>
      <select name="role" class="form-control">
        <option value="Student">Student</option>
        <option value="Teacher">Teacher</option>
        <option value="Accountain">Accountain</option>
        <option value="Staff">Staff</option>
        <option value="Guest">Guest</option>
        <option value="Admin">Admin</option>
      </select>
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
