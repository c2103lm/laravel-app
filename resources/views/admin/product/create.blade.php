@extends('master.admin')

@section('title','Thêm mới sản phẩm')

@section('main')

<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" name="name" placeholder="Input name">
        @error('name')
            <small class="help-block">{{$message}}</small>
        @enderror
    </div> -->
    <div class="form-group">
        <label for="">Ảnh</label>
        <input type="file" class="form-control" name="upload" >
        @error('upload')
            <small class="help-block">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status"  value="1" checked>
                Hiển thị
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status"  value="0" >
                Tạm ẩn
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>


@stop()