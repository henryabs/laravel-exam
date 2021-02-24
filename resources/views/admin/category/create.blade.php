@extends('admin.layouts.base')

@section('content')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="#">Administrator</a>
        <a class="breadcrumb-item">Category</a>
        <a class="breadcrumb-item">Create</a>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Create Category 
              
              <a href="{{route('category.index')}}" class="btn btn-sm btn-success pull-right mb-2" >All Categories</a>
            </h6>
            <div class="table-wrapper">
            	<div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                  <div class="card bd-0">
                    <div class="card-header card-header-default bg-primary">
                      Create Category
                    </div><!-- card-header -->
                    <div class="card-body bd bd-t-0 rounded-bottom">
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                            
                      <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Category Name" name="title">
                      </div>
                      

                        </div><!-- modal-body -->
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info pd-x-20">Create Category</button>
                          
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
