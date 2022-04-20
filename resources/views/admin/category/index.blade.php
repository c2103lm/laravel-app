@extends('master.admin')

@section('title','Admin cPanel')

@section('main')

<form action="" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <input class="form-control" name="key" placeholder="Input key">
    </div>


    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
    <a href="{{route('category.create')}}" class="btn btn-success"><i class="fa fa-plus"></i> Thêm mới</a>
</form>

<hr>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên danh mục</th>
            <th>Trạng thái</th>
            <th>Tùy chọn</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name}}</td>
            <td>{{$model->status}}</td>
            <td class="text-right">
                <form action="{{ route('category.delete', $model->id) }}" method="post">
                    @csrf @method('DELETE')
                    <a href="{{ route('category.edit', $model->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Sửa</a>
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Bạn có muốn cóa không?')"><i class="fa fa-trash"></i>  Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
<hr>
    {{$data->appends(request()->all())->links()}}
@stop()