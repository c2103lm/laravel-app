@extends('master.site')

@section('title','About page title')

@section('main')
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>Đăng ký tài khoản</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        @if (count($cart->items))
        <div class="main row">

            <div class="col-md-8">
                @if (auth()->guard('customer')->check())
                <form action="" method="POST" role="form">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Thông tin người đặt hàng</h3>

                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <span class="form-control">{{$customer->name}}</span>
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <span class="form-control">{{$customer->email}}</span>
                            </div>

                            <div class="form-group">
                                <label for="">Điện thoại</label>
                                <span class="form-control">{{$customer->phone}}</span>
                            </div>

                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <span class="form-control">{{$customer->address}}</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h3>Thông tin người nhận hàng</h3>

                            <div class="form-group">
                                <label for="">Họ và tên</label>
                                <input type="text" class="form-control" name="name" value="{{$customer->name}}"
                                    placeholder="Input name">
                            </div>

                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$customer->email}}"
                                    placeholder="Input email">
                            </div>

                            <div class="form-group">
                                <label for="">Điện thoại</label>
                                <input class="form-control" name="phone" value="{{$customer->phone}}"
                                    placeholder="Input phone">
                            </div>

                            <div class="form-group">
                                <label for="">Địa chỉ</label>
                                <input class="form-control" name="address" value="{{$customer->address}}"
                                    placeholder="Input address">
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                </form>
                @else

                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Chưa đăng nhập!</strong> <a href="{{ route('home.login') }}">click vào đây</a> để đăng nhâp
                </div>


                @endif
            </div>

            <div class="col-md-4">
                <h3>Thông tin giỏ hàng</h3>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart->items as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->quantity}}</td>

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
            </div>
        </div>
    </div>
    @else


    <div class="jumbotron">
        <div class="container">
            <h1>Giỏ hàng rỗng</h1>
            <p>Vui lòng tiếp tục mua hàng ...</p>
            <p>
                <a class="btn btn-primary" href="{{ route('home') }}">Tiếp tục mua hàng</a>
            </p>
        </div>
    </div>


    @endif
</div>
@stop()