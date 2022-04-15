@extends('master.site')

@section('title','Home page title')

@section('main')
<div class="jumbotron">
    <div class="container">
        <h1>Hello, home!</h1>
        <p>Contents ...</p>
        <p>
            <a class="btn btn-primary btn-lg">Learn more</a>
        </p>
    </div>
</div>

<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cats as $model)
        <tr>
            <td>{{$model->id}}</td>
            <td>{{$model->name}}</td>
            <td>{{ $model->status == 1 ? 'Hiển thị' : 'Ẩn' }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop()