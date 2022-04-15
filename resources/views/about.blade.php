@extends('master.site')

@section('title','About page title')

@section('main')
<h1>Hello blade view</h1>
<h2>{{$name}}</h2>

<ul>
    @foreach($data as $model)
    <li>{{$model}}</li>
    @endforeach
</ul>



<div class="container">
    @if ($check === true)
    
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3>Đúng</h3>
    </div>
    
    @elseif ($check == 5)

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3>Năm</h3>
    </div>

    @else 

    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3>Không biết</h3>
    </div>

    @endif
</div>

@stop()