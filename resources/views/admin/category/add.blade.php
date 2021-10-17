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
       
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input class="form-control" type="text" id="name" name="name" placeholder="Nhập tên danh mục">
                </div>
                <div class="form-group">
                    <label >Chọn danh mục cha</label>
                    <select class="form-control" name="paren_id" id="parent">
                        <option value="0">Chọn danh mục cha</option>
                        {!! $htmlOption !!}                  
                    </select>
                </div>
                <div class="form-group">
                <input class="form-control" type="text" name="slug" value="0" readonly>
                </div>
                <button type="submit" class="btn btn-primary">Lưu</button>
          
            </form> 
          <!-- <script>
            function noi(){
              var x = document.querySelector('#name').value;
              var y = document.getElementById("#parent").value;

              x = parseFloat(x); //2. chuyển kiểu dữ liệu về dạng số
               y = parseFloat(y);
            var slug = ('#name' + '#parent') ;       
            document.length('#slug').innerHTML = slug;
            }
          </script> -->
        </div>
      
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection

