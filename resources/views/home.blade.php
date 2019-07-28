@extends('layout.layout_base')

@section('content')
  @include('header')
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

    <hr>
    <button class="btn btn-success btn-lg btn-block" type="button" name="sell" data-toggle="modal" data-target="#selling">Sell a Car</button>
    <hr>

    <div class="">
      <h3>Cars Database</h3>
      <a href="/car/create" class="btn btn-primary mb-md">Add New Repository</a>
      <table class="datatableView display">
        <thead>
          <tr>
            <th>Car Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Last Update</th>
            <th class="text-right">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cars as $car)
            <tr>
              <td>{{$car->name}}</td>
              <td>{{$car->price}}</td>
              <td>{{$car->stock}}</td>
              <td>{{$car->updated_at->diffForHumans()}}</td>
              <td class="text-right">
                <div class="dropdown">
                  <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="about-us">
                    <li><a data-toggle="modal" data-target="#myModal">Sell</a></li>
                    <li><a href="/car/{{$car->id}}/update">Update</a></li>
                    <li><a href="/car/{{$car->id}}/delete">Delete</a></li>
                  </ul>
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>



  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>
  <div id="selling" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sell a car</h4>
        </div>
        <form class="" action="/sell" method="post">
          <div class="modal-body">
              {{ csrf_field() }}
              <div class="form-group">
                <label>Car Name</label>
                <select class="form-control" name="id_car">
                  @foreach ($cars as $car)
                    <option value="{{$car->id}}">{{$car->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Quantity</label>
                <input type="number" class="form-control" name="quantity" value="1" required>
              </div>
              <div class="form-group">
                <label>Customer Name</label>
                <input type="text" class="form-control" name="name" required>
              </div>
              <div class="form-group">
                <label>Customer Email</label>
                <input type="email" class="form-control" name="email" required>
              </div>
          </div>
          <div class="modal-footer">
            <span class="pull-left">
              <label for="" class="small text-muted">Total Price</label>
              <br>
              <span id="totalPrice">
                10000000
              </span>
            </span>
            <button type="submit" class="btn btn-default pull-right btn-primary">Submit</button>
          </div>
        </form>
      </div>

    </div>
  </div>
@endsection
