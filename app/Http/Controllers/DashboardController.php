<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Transaction;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function homePage(Request $request)
    {
      $transaction_td = Transaction::whereDate('created_at',Carbon::today())->get();
      $transaction_week = Transaction::whereDate('created_at',">=",Carbon::today()->subDays(7))->get();
      $cars = Car::all();
      return view('home',compact('transaction_td','transaction_week','cars'));
    }
}
