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
      <h3 class="w-full text-center">Register Admin</h3>
      <hr>
      <form class="" action="/register" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Retype Password</label>
          <input type="password" class="form-control" name="password_confirmation" placeholder="Retype Password" required>
        </div>
        <div class="form-group">
          <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
        </div>
      </form>
    </div>

  </div>
@endsection
