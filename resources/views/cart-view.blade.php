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
                        <th>T???ng s??? l?????ng</th>
                        <td>{{$cart->totalQuantity}}</td>
                    </tr>
                    <tr>
                        <th>T???ng ti???n thanh to??n</th>
                        <td>{{$cart->totalAmount}}</td>
                    </tr>
                </tbody>
            </table>
            
            <a href="{{route('home')}}" class="btn btn-primary">Ti???p t???c mua h??ng</a>
            <a href="{{route('cart.clear')}}" class="btn btn-danger" onclick="return confirm('b???n c?? ch???c mu???n x??a')">X??a h???t</a>
            <a href="{{route('customer.checkout')}}" class="btn btn-success">?????t h??ng ngay</a>
            
            @else 
                
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Title!</strong> Kh??ng c?? d??? li???u n??o...
                </div>
                
            @endif
            <div class="clear"></div>
        </div>
    </div>
</div>

@stop()