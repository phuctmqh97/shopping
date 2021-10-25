@extends('layouts.admin')

@section('title')
<title>Trang chủ</title>
@endsection
@section('content')
  
<div class="content-wrapper">

  @include('partials.content-header', ['name' => 'danh mục', 'key' => 'Sửa'])
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
       
        <form action="" method="POST" enctype="multipart/form-data">
          @csrf
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input class="form-control" type="text" id="name" value="{{ $category->name }}" name="name" placeholder="Nhập tên danh mục">
                </div>
                <div class="form-group">
                    <label >Chọn danh mục cha</label>
                    <select class="form-control" name="paren_id" id="parent">
                        <option value="0">Chọn danh mục cha</option>
                        {!! $htmlOption !!}                  
                    </select>
                </div>
                <div class="form-group">
                <input class="form-control" type="text" name="slug" value="0" readonly hidden>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button> 
          @csrf
            </form> 
        </div>
      
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection

