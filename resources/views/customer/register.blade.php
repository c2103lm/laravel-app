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
        <div class="main">
            
            <form action="" method="POST" role="form">
                @csrf
                <legend>Form đăng ký</legend>
            
                <div class="form-group">
                    <label for="">Họ và tên</label>
                    <input type="text" class="form-control" name="name" placeholder="Input name">
                </div>
                
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Input email">
                </div>
            
                
            
                <div class="form-group">
                    <label for="">Điện thoại</label>
                    <input class="form-control" name="phone" placeholder="Input phone">
                </div>
            
            
                <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input class="form-control" name="address" placeholder="Input address">
                </div>
            
                
            
                <div class="form-group">
                    <label for="">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" placeholder="Input address">
                    @error('password')
                        <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
            
                  
            
                <div class="form-group">
                    <label for="">Xác nhận mật khẩu</label>
                    <input type="password" class="form-control" name="confirm_password" placeholder="Input address">
                    @error('confirm_password')
                        <small class="help-block">{{$message}}</small>
                    @enderror
                </div>
            
                
            
                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>
            
            <div class="clear"></div>
        </div>
    </div>
</div>
@stop()