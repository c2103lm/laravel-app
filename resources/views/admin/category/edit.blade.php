@extends('master.admin')

@section('title','Chỉnh sửa danh mục')

@section('main')

<form action="{{ route('category.update', $category->id) }}" method="POST" role="form">
    <legend>Form chỉnh sửa</legend>
    @csrf @method('PUT')
    <div class="form-group">
        <label for="">Tên danh mục</label>
        <input type="text" class="form-control" name="name" value="{{$category->name}}">
        @error('name')
            <small class="help-block">{{$message}}</small>
        @enderror
    </div>

    <div class="form-group">
        <label for="">Trạng thái</label>
        
        <div class="radio">
            <label>
                <input type="radio" name="status"  value="1" {{$category->status == 1 ? 'checked' : ''}}>
                Hiển thị
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status"  value="0" {{$category->status == 0 ? 'checked' : ''}}>
                Tạm ẩn
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>


@stop()