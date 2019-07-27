<!DOCTYPE html>
<html lang="en">
<head>
  <title>
    @yield('title')
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style media="screen">
    .position-absolute{
      position: absolute;
    }
    .position-relative{
      position: relative;
    }
    .w-full{
      width: 100%;
    }
    .h-full{
      height: 100%;
    }
    .middle-center{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
    }
  </style>
  @yield('head')
</head>
<body>

<div class="container">
  @yield('content')
</div>

@yield('script')
</body>
</html>
