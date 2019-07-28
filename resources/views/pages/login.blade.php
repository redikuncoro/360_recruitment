@extends('layout.layout_base')

@section('title')
  Login Page
@endsection

@section('head')
  <style media="screen">
    html,body{
      height: 100%;
    }
    .container{
      height: 100%;
    }
  </style>
@endsection

@section('content')
  <div class="position-relative w-full h-full">

    <div class="middle-center" style="width:256px;">
      <h3 class="w-full text-center">Login Admin</h3>
      <hr>
      <form class="" action="/login" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username" name="username" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
        </div>
      </form>
      <div class="text-right">
        <a href="/register">register admin</a>
      </div>
    </div>

  </div>
@endsection
