@extends('admin.layouts.base')

@section('content')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="#">Administrator</a>
        <a class="breadcrumb-item">Product</a>
        <a class="breadcrumb-item">Create</a>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Create Category 
              
              <a href="{{route('product.index')}}" class="btn btn-sm btn-success pull-right mb-2" >All Products</a>
            </h6>
            <div class="table-wrapper">
            	<div class="row">
                {{-- <div class="col-lg-2"></div> --}}
                <div class="col-lg-12">
                  <div class="card bd-0">
                    <div class="card-header card-header-default bg-primary">
                      Product #: {{$product->id}}
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                      <div class="form-group">
                        <label>Title: </label>
                        {{$product->title}}
                      </div>

                      <div class="form-group">
                        <label>Category: </label>
                        @foreach($categories as $category)
                          @if($category->id == $product->procat->category_id)
                          {{$category->title}}
                          @endif
                        
                        @endforeach
                      </div>

                      <div class="form-group">
                        <label>Content: </label>
                        {!!$product->content!!}
                      </div>

                      <div class="form-group">
                        <label>Image: </label><br>
                        <img src="{{asset($product->image)}}" alt="" height="120px">
                      </div>
                    </div><!-- card-body -->
                  </div><!-- card -->
                  
                </div> 
                {{-- <div class="col-lg-2"></div> --}}
              </div>
              
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div>


  
@endsection
