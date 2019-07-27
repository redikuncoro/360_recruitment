<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function viewLogin(Request $request)
    {
      if ($request->session()->has('user')) {
        return redirect('/');
      }
      return view('pages.login');
    }
    public function login(Request $request)
    {
      $validator = validator::make($request->all(),[
        'username' => 'required',
        'password' => 'required'
      ]);
      if ($validator->fails()) {
        dd($validator->errors()->first());
        return back()->withErrors(['message' => $validator->errors()->first()]);
      };
      $user = User::where('username',$request->username)->first();
      if (!$user) {
        dd("username not found");
        return back()->withErrors(['message' => "username not found"]);
      }
      if (Hash::check($request->password, $user->password)) {
        $request->session()->put('user',$user);
        return redirect('/');
      }
      else {
        dd("wrong password");
        return back()->withErrors(['message' => "wrong password"]);
      }
    }

    public function logout(Request $request){
      $request->session()->forget('user');
      return redirect('/login')->with('success', 'Logout success');
    }

    public function viewRegister()
    {
      return view('pages.register');
    }
    public function register(Request $request)
    {
      // dd("sadasd");
      $validator = validator::make($request->all(),[
        'username' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
      ]);
      if ($validator->fails()) {
        dd($validator->errors()->first());
        return back()->withErrors(['register' => $validator->errors()->first()]);
      };
      $user = new User;
      $user->username = $request->username;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $user->save();
      return redirect('/');
    }
}
