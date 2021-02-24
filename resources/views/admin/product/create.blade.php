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
                      Create Product
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            
                      <div class="form-group">
                        <label>Product Title</label>
                        <input type="text" class="form-control" placeholder="Product Title" name="title" value="{{ Request::old('title') }}">
                      </div>

                      <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control select2" data-placeholder="Choose Browser">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Product Content: <span class="tx-danger">*</span></label>
                        <textarea class="form-control" name="content" id="summernote">{{ Request::old('content') }}</textarea>
                      </div>

                      <div class="form-group">
                        <label class="form-control-label">Product Image: <span class="tx-danger">*</span>
                        <br>
                        <br>
                        <label class="custom-file">
                          <input type="file" id="file" class="custom-file-input" name="image">
                          <span class="custom-file-control"></span>
                        </label>
                      </div>

                        </div><!-- modal-body -->
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info pd-x-20">Create Product</button>
                          
                        </div>

                      </form>
                    </div><!-- card-body -->
                  </div><!-- card -->
                  
                </div> 
                {{-- <div class="col-lg-2"></div> --}}
              </div>
              
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div>


  
@endsection
