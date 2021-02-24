@extends('admin.layouts.base')

@section('content')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="#">Administrator</a>
        <a class="breadcrumb-item">Category</a>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Category Lists 
              
              <a href="{{route('category.create')}}" class="btn btn-sm btn-success pull-right mb-2" data-toggle="modal" data-target="#modaldemo2">Add New</a>
            </h6>
            <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Category Name</th>
                  <th class="wd-20p">Action</th>

                </tr>
              </thead>
              <tbody>
                {{-- @forelse($coupons as $coupon)
                  <tr>
                    <td>{{$coupon->id}}</td>
                    <td>{{$coupon->coupon}}</td>
                    <td>{{$coupon->discount}}%</td>
                    <td>
                      <a href="#" class="btn btn-sm btn-info editbtn editcoupon" data-toggle="modal" data-target="#edit_modal" data-id="{{$coupon->id}}" data-coupon="{{$coupon->coupon}}" data-discount="{{$coupon->discount}}">Edit</a>
                      <a href="#" class="btn btn-sm btn-danger deletebtn" data-toggle="modal" data-target="#delete_modal" data-id="{{$coupon->id}}">Delete</a>
                    </td>
                  </tr>

                @empty
                <h4>No data found. create one!</h4>

                @endforelse --}}
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div>


<div id="modaldemo2" class="modal fade">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-20">
            <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-info pd-x-20">Save changes</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
  
@endsection
