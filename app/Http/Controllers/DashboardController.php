<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class DashboardController extends Controller
{
    public function homePage(Request $request)
    {
      $cars = Car::all();
      $cek = "ces";
      return view('home',compact('cars','cek'));
    }
}
