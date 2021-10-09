@extends('layouts.admin')

@section('title')
<title>Trang chủ</title>
@endsection
@section('content')
  
<div class="content-wrapper">

  @include('partials.content-header', ['name' => 'danh mục', 'key' => 'Thêm'])
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
        <form action="">
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input class="form-control" type="text" name="" placeholder="Nhập tên danh mục">
                </div>
                <div class="form-group">
                    <label >Chọn danh mục cha</label>
                    <select class="form-control">
                        <option value="0">Chọn danh mục cha</option>
                        {{$htmlOption}}
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
            </form>
        </div>
      
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection

