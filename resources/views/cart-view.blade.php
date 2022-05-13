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
            @if (count($carts))
            
            
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
                    @foreach($carts as $item)
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