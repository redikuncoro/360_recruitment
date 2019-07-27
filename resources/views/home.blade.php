@extends('layout.layout_base')

@section('content')
  <div class="page-header">
    <div class="row">
      <div class="col-md-7">
        <h1>Hello</h1>

      </div>
      <div class="col-md-5 text-right">
        <a href="/logout">logout</a>

      </div>

    </div>
  </div>
  <div class="">

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <h3>Today Resume</h3>
          <div class="row">
            <div class="col-sm-6">
              Most Sold
            </div>
            <div class="col-sm-6">
              Avanza
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              Total Sold Item
            </div>
            <div class="col-sm-6">
              20
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              Total Income
            </div>
            <div class="col-sm-6">
              Rp. 20.000.000
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <h3>This Week Resume</h3>
          <div class="row">
            <div class="col-sm-6">
              Most Sold
            </div>
            <div class="col-sm-6">
              Avanza
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              Total Sold Item
            </div>
            <div class="col-sm-6">
              120
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              Total Income
            </div>
            <div class="col-sm-6">
              Rp. 320.000.000
            </div>
          </div>
        </div>
      </div>
    </div>

    <br>

    <div class="">
      <h3>Cars Database</h3>
      <table class="datatableView display">
        <thead>
          <tr>
            <th>Car Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Last Update</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cars as $car)
            <tr>
              <td>{{$car->name}}</td>
              <td>{{$car->price}}</td>
              <td>{{$car->stock}}</td>
              <td>{{$car->updated_at}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
