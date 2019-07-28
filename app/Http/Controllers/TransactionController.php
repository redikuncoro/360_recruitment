<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function sell(Request $request)
    {
      $validator = validator::make($request->all(),[
        'id_car' => 'required',
        'quantity' => 'required',
        'name' => 'required',
        'email' => 'required|email'
      ]);
      if ($validator->fails()) {
        dd($validator->errors()->first());
        return back()->withErrors(['message' => $validator->errors()->first()]);
      };

      $car = Car::find($request->id_car);
      if (!$car) {
          dd("404");
      }

      $transaction = new Transaction;
      $transaction->id_car = $car->id;
      $transaction->quantity = $request->quantity;
      $transaction->name = $request->name;
      $transaction->email = $request->email;
      $transaction->id_user = $request->user->id;
      $transaction->value = $car->price * $request->quantity;
      // dd($transaction);
      $transaction->save();

      $car->stock = $car->stock - $request->quantity;
      $car->save();

      return redirect('/');
    }
}
