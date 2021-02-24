@extends('admin.layouts.base')

@section('content')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="#">Administrator</a>
        <a class="breadcrumb-item">Category Product</a>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Category Product Lists 
              
              <a href="{{route('catpro.create')}}" class="btn btn-sm btn-success pull-right mb-2" >Add New</a>
            </h6>
            <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Product</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-20p">Action</th>

                </tr>
              </thead>
              <tbody>
                @forelse($catpro as $catproduct)
                  <tr>
                    <td>{{$catproduct->id}}</td>
                    <td>{{$catproduct->product->title}}</td>
                    <td>{{$catproduct->category->title}}</td>
                    <form action="{{route('catpro.delete')}}" method="POST">
                      @csrf
                    <td>
                      <a href="{{route('catpro.edit', ['id' => $catproduct->id])}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>
                    
                        
                        <input type="hidden" value="{{$catproduct->id}}" name="catpro_id">
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

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Temporary Deleted 
              
            </h6>
            <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Product</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-20p">Action</th>

                </tr>
              </thead>
              <tbody>
                @forelse($trashed as $trashedcat)
                  <tr>
                    <td>{{$trashedcat->id}}</td>
                    <td>{{$trashedcat->product->title}}</td>
                    <td>{{$trashedcat->category->title}}</td>
                    <td>
                      <form action="{{route('catpro.restore')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$trashedcat->id}}" name="catpro_id">
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
