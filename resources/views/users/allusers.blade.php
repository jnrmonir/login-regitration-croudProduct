@extends('master')
@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>All Users</h5>
    </div><!-- sl-page-title -->   
    <div class="card pd-20 pd-sm-40 mg-t-50">
      <h6 class="card-body-title">All Users</h6>
      <div class="table-responsive">
        <table class="table table-bordered mg-b-0">
          <thead>
            <tr>
              <th>SL</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
              <th>Created_at</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($usersall as $key=>$item)
           <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->created_at != null ? $item->created_at->diffForHumans():'N/A'}}</td>
            <td>
                <a href="{{url('/edit/users/'. $item->id)}}" class="btn btn-outline-info">Edit</a>
                <a href="{{url('/delete/users/'. $item->id)}}" class="btn btn-outline-danger">Delete</a>
            </td>
            {{-- <td>
                <a href="{{url('/category/edit/'. $item->id)}}" class="btn btn-outline-info">Edit</a>
                <a href="{{url('/category/delete/'. $item->id)}}" class="btn btn-outline-danger">Delete</a>
            </td> --}}
          </tr>
           @endforeach
          </tbody>
        </table>
      </div><!-- table-responsive -->
    </div><!-- card -->
</div>
@endsection