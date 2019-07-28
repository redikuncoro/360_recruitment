@extends('layout.layout_base')

@section('content')
  @include('header')
  <div class="">
    <h3>Add New List</h3>
    <div class="row">
      <div class="col-md-5">
        <form class="" action="/car/create" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label>Car Name</label>
            <input type="text" class="form-control" name="car_name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <label>Price</label>
            <input type="number" class="form-control" name="price" placeholder="Price" required>
          </div>
          <div class="form-group">
            <label>Stock</label>
            <input type="number" class="form-control" name="stock" value="0" required>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        </form>

      </div>
    </div>
  </div>
@endsection
