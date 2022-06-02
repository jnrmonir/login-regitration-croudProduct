@extends('master')
@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>All Users</h5>
    </div><!-- sl-page-title -->   
    <div class="card pd-20 pd-sm-40 mg-t-50">
      <h6 class="card-body-title">All Products</h6>
      <div class="table-responsive">
        <table class="table table-bordered mg-b-0">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Gender</th>
              <th>Color</th>
              <th>Size</th>
              <th>Price</th>
              <th>Created_at</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($products as $key=>$product)
           <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->gender }}</td>
            <td>{{ $product->color }}</td>
            <td>{{ $product->size }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->created_at != null ? $product->created_at->diffForHumans():'N/A'}}</td>
            <td>
                <a href="{{url('/edit/products/'. $product->id)}}" class="btn btn-outline-info">Edit</a>
                <a href="{{url('/delete/products/'. $product->id)}}" class="btn btn-outline-danger">Delete</a>
            </td>
          </tr>
           @endforeach
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->
</div>
@endsection