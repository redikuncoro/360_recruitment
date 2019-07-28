@extends('layout.layout_base')

@section('content')
  @include('header')
  <div class="">
    <h3>Update Data {{$car->name}}</h3>
    <div class="row">
      <div class="col-md-5">
        <form class="" action="/car/{{$car->id}}/update" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Car Name</label>
            <input type="text" class="form-control" name="car_name" value="{{$car->name}}" required>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" value="{{$car->price}}" required>
          </div>
          <div class="form-group">
            <label>Stock</label>
            <input type="number" class="form-control" name="stock" value="{{$car->stock}}" required>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Update</button>
          </div>
        </form>

      </div>
    </div>
  </div>
@endsection
