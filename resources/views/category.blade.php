@extends('master.site')

@section('title', $category->name)

@section('main')


<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>{{$category->name}}</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            @if ($products->count())
            <div class="grids_of_3">
                @foreach($products as $ps)
                <div class="grid1_of_3">
                    <a href="">
                        <img src="{{url('public/uploads')}}/{{$ps->image}}" alt="{{$ps->name}}" />
                        <h3>{{$ps->name}}</h3>
                        <div class="price">
                            <h4>{{$ps->price}}<span>đ</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                @endforeach
            </div>
            @else 
                
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Title!</strong> Không có dữ liệu nào...
                </div>
                
            @endif
            <div class="clear"></div>
        </div>
        {{$products->links()}};
    </div>
</div>

@stop()