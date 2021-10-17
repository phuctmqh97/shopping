@extends('layouts.admin')

@section('title')
<title>Trang chủ</title>
@endsection
@section('content')
  
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header', ['name' => 'danh mục', 'key' => 'Danh sách'])
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-12">
          <a href="{{route('category.add')}}" class="btn btn-outline-success float-right m-2">ADD</a>
        </div>

          <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
  <tbody>
    @foreach ($categories as $cate) 
    <!-- <tr>
      <th scope="row">{{ $cate->id }}</th>
      <td >{{ $cate->name }}</td>
        <td>
          <a href="" class="btn btn-outline-warning">Sửa</a>
          <a href="" class="btn btn-outline-danger"> Xóa </a> 
        </td>
    
    </tr> -->
    <tr>
                <td>{{(($categories->currentPage()-1)*count($categories)) + $loop->iteration}}</td>
                <td>{{$cate->name}}</td>
                <td>
                    <a href="" class="btn btn-success">Sửa</a>
                    <a href="" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
    @endforeach
  </tbody>
</table>  
          </div>
         
          <div class="d-flex justify-content-end">
    {{$categories->links()}}
</div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  
@endsection

