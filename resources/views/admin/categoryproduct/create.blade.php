@extends('admin.layouts.base')

@section('content')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="#">Administrator</a>
        <a class="breadcrumb-item">Category Product</a>
        <a class="breadcrumb-item">Create</a>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Create Category Product Association 
              
              <a href="{{route('catpro.index')}}" class="btn btn-sm btn-success pull-right mb-2" >All Category Products</a>
            </h6>
            <div class="table-wrapper">
              <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                  <div class="card bd-0">
                    <div class="card-header card-header-default bg-primary">
                      Create Category Product Association 
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                    <form action="{{route('catpro.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            
                      <div class="form-group">
                        <label>Product</label>
                        <select name="product_id" class="form-control select2" data-placeholder="Choose Browser">
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->title}}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control select2" data-placeholder="Choose Browser">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                      </div>
                      

                        </div><!-- modal-body -->
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info pd-x-20">Assign Category</button>
                          
                        </div>

                      </form>
                    </div><!-- card-body -->
                  </div><!-- card -->
                  
                </div> 
                <div class="col-lg-4"></div>
              </div>
              
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div>


  
@endsection
