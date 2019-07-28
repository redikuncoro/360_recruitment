<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Car;

class CarController extends Controller
{
    public function viewCreate()
    {
      return view('pages.car.create');
    }

    public function create(Request $request)
    {
      $validator = validator::make($request->all(),[
        'car_name' => 'required',
        'price' => 'required'
      ]);
      if ($validator->fails()) {
        dd($validator->errors()->first());
        return back()->withErrors(['message' => $validator->errors()->first()]);
      };

      $car = Car::where('name',strtolow($request->car_name))->first();
      if ($car) {
        dd("car already exist on database. do you want to update?");
      }
      $car = new Car;
      $car->name = strtolower($request->car_name);
      $car->price = $request->price;
      $stock = 0;
      if ($request->has('stock')) {
        $stock = $request->stock;
      }
      $car->stock = $stock;
      $car->save();
      dd("success");
      return redirect('/');
    }


    public function viewUpdate(Request $request, $id)
    {
      $car = Car::find($id);
      if (!$car) {
          dd("404");
      }
      return view('pages.car.update',compact('car'));
    }

    public function update(Request $request, $id)
    {
      $validator = validator::make($request->all(),[
        'car_name' => 'required',
        'price' => 'required'
      ]);
      if ($validator->fails()) {
        dd($validator->errors()->first());
        return back()->withErrors(['message' => $validator->errors()->first()]);
      };

      $car = Car::find($id);
      if (!$car) {
          dd("404");
      }

      $car->name = strtolower($request->car_name);
      $car->price = $request->price;
      $car->stock = $request->stock;
      // dd($car);
      $car->save();

      return redirect('/');

    }

    public function delete(Request $request, $id)
    {

      $car = Car::find($id);
      if (!$car) {
          dd("404");
      }
      // dd($car);
      $car->delete();

      return redirect('/');

    }
}
