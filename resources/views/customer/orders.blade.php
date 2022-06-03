@extends('master.site')

@section('title','About page title')

@section('main')
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>Lịch sử đơn hàng</h2>
        </div>
    </div>
</div>
<!-- start main -->


<div class="container">
    <br />
    <h2>Lịch sử đơn hàng</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ngày đặt</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
                <th>Chi tiết</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customer->orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->created_at}}</td>
                <td>{{$order->getTotalAmount()}}</td>
                <td>
                    @if ($order->status == 0)
                    <span class="label label-primary">Chờ duyệt</span>
                    @elseif($order->status == 1)
                    <span class="label label-success">Đã duyệt</span>
                    @elseif($order->status == 2)
                    <span class="label label-warning">Đã thanh toán</span>
                    @else
                    <span class="label label-danger">Đã hủy</span>
                    @endif
                </td>
                <td>

                    <a data-toggle="modal" href='#modal-{{$order->id}}' class="btn btn-success">Xem</a>


                    <div class="modal fade" id="modal-{{$order->id}}">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Modal title</h4>
                                </div>
                                <div class="modal-body">

                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Số lượng</th>
                                                <th>Giá</th>
                                                <th>Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->details as $key => $detail)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$detail->product->name}}</td>
                                                <td>{{$detail->quantity}}</td>
                                                <td>{{$detail->price}}</td>
                                                <td>{{$detail->price * $detail->quantity}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>


            @endforeach
        </tbody>
    </table>

</div>






@stop()

@section('js')

<!-- Latest compiled and minified CSS & JS -->
<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

@stop()