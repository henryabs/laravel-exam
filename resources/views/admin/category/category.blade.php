@extends('admin.layouts.base')

@section('content')

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="http://192.168.200.24/administrator">Administrator</a>
        <a class="breadcrumb-item">Category</a>
      </nav>

      <div class="sl-pagebody">
        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Category Lists 
              
              <a href="{{route('category.create')}}" class="btn btn-sm btn-success pull-right mb-2" >Add New</a>
            </h6>
            <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Title</th>
                  <th class="wd-20p">Action</th>

                </tr>
              </thead>
              <tbody>
                @forelse($categories as $category)
                  <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <form action="{{route('category.delete')}}" method="POST">
                      @csrf
                    <td>
                      <a href="{{route('category.edit', ['id' => $category->id])}}" class="btn btn-sm btn-info"><i class="fa fa-edit"></i></a>

                        
                        <input type="hidden" value="{{$category->id}}" name="category_id">
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
                  <th class="wd-15p">Category Name</th>
                  <th class="wd-20p">Action</th>

                </tr>
              </thead>
              <tbody>
                @forelse($only_trashed as $category)
                  <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    
                    
                    <td>
                      <form action="{{route('category.restore')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$category->id}}" name="category_id">
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
