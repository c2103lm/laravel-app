@extends('master.site')

@section('title', $product->name)

@section('main')


<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>{{$product->name}}</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main row">
            <div class="col-md-5">
                <img src="{{url('public/uploads/'.$product->image)}}" alt="" style="width:100%">
            </div>
            <div class="col-md-7">
                <h2>{{$product->name}}</h2>
                <h4>
                    Giá gốc: {{ number_format($product->price)}} đ
                    <b>
                        Giá KM: {{ number_format($product->sale_price)}} đ
                    </b>
                </h4>
                <p>
                    {{Str::words(strip_tags($product->desr), 50)}}
                </p>
            </div>
        </div>

        <h2>Chi tiết sản phẩm</h2>
         {!! $product->desr !!}
    </div>
</div>

@stop()