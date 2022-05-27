@extends('master.site')

@section('title', 'Gio hang')

@section('main')


<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>Gio hang</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            @if (count($cart->items))
            
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>Quantity</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart->items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->price}}</td>
                        <td>
                            
                            <form action="{{ route('cart.update', $item->id)}}" method="GET" class="form-inline" role="form">
                            
                                <div class="form-group">
                                    <input class="form-control" name="quantity" value="{{$item->quantity}}">
                                </div>
                            
                                
                            
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            
                        </td>
                        <td>
                            <a href="{{ route('cart.delete', $item->id) }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
            <table class="table table-bordered table-hover">
                <tbody>
                <tr>
                        <th>Tổng số lượng</th>
                        <td>{{$cart->totalQuantity}}</td>
                    </tr>
                    <tr>
                        <th>Tổng tiền thanh toán</th>
                        <td>{{$cart->totalAmount}}</td>
                    </tr>
                </tbody>
            </table>
            
            <a href="{{route('home')}}" class="btn btn-primary">Tiếp tục mua hàng</a>
            <a href="{{route('cart.clear')}}" class="btn btn-danger" onclick="return confirm('bạn có chắc muốn xóa')">Xóa hết</a>
            <a href="{{route('home')}}" class="btn btn-success">Đặt hàng ngay</a>
            
            @else 
                
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Title!</strong> Không có dữ liệu nào...
                </div>
                
            @endif
            <div class="clear"></div>
        </div>
    </div>
</div>

@stop()