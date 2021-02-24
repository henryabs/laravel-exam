@extends('admin.layouts.base')

@section('content')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="#">Administrator</a>
        <a class="breadcrumb-item">Product</a>
        <a class="breadcrumb-item">Product Lists</a>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Product Lists 
              
              <a href="{{route('product.create')}}" class="btn btn-sm btn-success pull-right mb-2" >Add New</a>
            </h6>
            <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">Action</th>

                </tr>
              </thead>
              <tbody>
                @forelse($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>
                      @foreach($categories as $category)
                          @if($category->id == $product->procat->category_id)
                              {{$category->title}}
                          @endif
                      @endforeach
                      
                    </td>
                    <td><img src="{{asset($product->image)}}" alt="" height="80px"></td>
                    <form action="{{route('product.delete')}}" method="POST">
                      @csrf
                    <td>
                      <a href="{{route('product.edit', ['id' => $product->id])}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                      <a href="{{route('product.show', ['id' => $product->id])}}" class="btn btn-sm btn-warning"><i class="fa fa-eye"></i></a>
                        
                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <button type="submit" class="fa fa-trash btn btn-danger btn-sm"></button>
                      
                      </a>
                    </td>
                    </form>
                  </tr>

                @empty
                

                @endforelse
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mt-5">
            <h6 class="card-body-title">Temporary Deleted
              
            </h6>
            <div class="table-wrapper">
            <table id="datatable2" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-20p">Action</th>

                </tr>
              </thead>
              <tbody>
                @forelse($only_trashed as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td><img src="{{asset($product->image)}}" alt="" height="80px"></td>
                    
                    <td>
                      <form action="{{route('product.restore')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <input type="submit" class="btn btn-success btn-sm" value="Restore">
                      </form>
                    </td>
                    
                  </tr>

                @empty
                

                @endforelse
                
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

      </div>
@endsection
