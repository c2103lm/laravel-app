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
                <img src="{{url('public/uploads/'.$product->image)}}" id="big-img" alt="" style="width:100%">
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{url('public/uploads/'.$product->image)}}" class="product-thumb" alt="" style="width:100%">
                    </div>
                    @foreach($image_list as $img) 
                    <div class="col-md-4">
                        <img class="product-thumb" src="{{url('public/uploads/'.$img)}}" alt="" style="width:100%">
                    </div>
                    @endforeach

                    @foreach($image_list1 as $img1) 
                    <div class="col-md-4">
                        <img class="product-thumb" src="{{url('public/uploads/'.$img1->image_name)}}" alt="" style="width:100%">
                    </div>
                    @endforeach
                </div>
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
                   Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga accusantium at doloribus, quaerat quia ex minus hic sint eum, quod cum nihil voluptas dignissimos? In modi distinctio totam aliquam rerum.
                </p>

                <hr>

                
                <form action="{{ route('cart.add', $product->id) }}" method="GET" class="form-inline" role="form">
                
                    <div class="form-group">
                        <label class="sr-only" for="">label</label>
                        <input type="number" class="form-control" name="quantity" placeholder="Input field">
                    </div>
                
                    
                
                    <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
                </form>
                
            </div>
        </div>

       
    </div>
</div>

@stop()
@section('js')
<script>
    $('.product-thumb').click(function() {
        var _src = $(this).attr('src');
        // alert(_src)
        $('#big-img').attr('src', _src);
    })
</script>
@stop()