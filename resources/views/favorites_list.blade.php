@extends('master.site')

@section('title', 'San pham yeu thich')

@section('main')


<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>San pham yeu thich</h2>
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
             <x-product-list :data="$products"/>
            </div>
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