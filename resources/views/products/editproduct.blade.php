@extends('master')
@section('breadcrumb')
    Product
@endsection
@section('product')
    active
@endsection
@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Product Add</h5>
    </div><!-- sl-page-title -->
    <form action="{{ route('updateproduct') }}" method="post">
        @csrf
        <input type="hidden" name="product_id"  value="{{$product_edit->id}}">

        <div class="row row-sm mg-t-20">
            <div class="col-xl-12">
              <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                {{-- <h6 class="card-body-title">Left Label Alignment</h6>
                <p class="mg-b-20 mg-sm-b-30">A basic form where labels are aligned in left.</p> --}}
                <div class="row">
                  <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <input type="text" name="name" value="{{$product_edit->name}}" class="form-control" placeholder="Enter Name">
                  </div>
                </div><!-- row -->
                <div class="row mg-t-20">
                  <label class="col-sm-4 form-control-label">Gender: <span class="tx-danger">*</span></label>
                  <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                    <select name="gender" value="{{$product_edit->gender}}" id="gender" class="form-control">
                        <option>Select One</option>
                        <option>Man</option>
                        <option>Women</option>
                    </select>
                  </div>
                </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Color: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <select name="color" value="{{$product_edit->color}}" id="color" class="form-control">
                          <option>Select One</option>
                          <option>White</option>
                          <option>Black</option>
                      </select>
                    </div>
                  </div>
                <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Size: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <select name="size" value="{{$product_edit->size}}" id="size" class="form-control">
                          <option>Select One</option>
                          <option>S</option>
                          <option>M</option>
                          <option>L</option>
                          <option>XL</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mg-t-20">
                    <label class="col-sm-4 form-control-label">Price: <span class="tx-danger">*</span></label>
                    <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                      <input type="text" name="price" value="{{$product_edit->price}}" class="form-control" placeholder="Enter price">
                    </div>
                  </div>
                </div>
                <div class="form-layout-footer mg-t-30 text-center">
                  <button class="btn btn-info mg-r-5">Submit Form</button>
                </div><!-- form-layout-footer -->
              </div><!-- card -->
            </div><!-- col-6 -->

          </div><!-- row -->
    </form>




</div>

@endsection
